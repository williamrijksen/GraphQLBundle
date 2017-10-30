<?php

/*
 * This file is part of the OverblogGraphQLBundle package.
 *
 * (c) Overblog <http://github.com/overblog/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Overblog\GraphQLBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlaygroundController extends Controller
{
    public function indexAction($schemaName = null)
    {
        $endpoint = $this->generateUrl('overblog_graphql_endpoint');

        return $this->render(
            $this->getParameter('overblog_graphql.playground_template'),
            [
                'endpoint' => $endpoint,
                'versions' => [
//                    'graphiql' => $this->getParameter('overblog_graphql.versions.graphiql'),
                    'react' => $this->getParameter('overblog_graphql.versions.react'),
                    'fetch' => $this->getParameter('overblog_graphql.versions.fetch'),
                ],
            ]
        );
    }
}
