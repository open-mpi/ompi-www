case ORTE_DAEMON_UPDATE_STATE_CMD:
            if (orte_debug_daemons_flag) {
                opal_output(0, "%s orted_recv: (RADIC)update state request from %s",
                            ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), ORTE_NAME_PRINT(sender));
            }

            /* Unpack the buffer... */
            n = 1;
            if (ORTE_SUCCESS != (ret = opal_dss.unpack(buffer, &proc, &n, ORTE_NAME))) {
                ORTE_ERROR_LOG(ret);
                goto CLEANUP;
            }
            if (ORTE_SUCCESS != (ret = opal_dss.unpack(buffer, &state, &n, OPAL_UINT16))) {
                ORTE_ERROR_LOG(ret);
                goto CLEANUP;
            }

            /* OK. Update status, but what is the new status? */
            if (ORTE_PROC_STATE_FAULT == state) {
                if (ORTE_PROC_IS_HNP) {
                    opal_output(0, "Intentando recuperar, soy el HNP");
                    /* Load the structure for application or orted job */
                    if (NULL == (jdata = orte_get_job_data_object(proc.jobid))) {
                        ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
                        goto CLEANUP;
                    }
                    procs = (orte_proc_t**)jdata->procs->addr;
                    if (NULL == procs[proc.vpid] ) {
                        ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
                        goto CLEANUP;
                    }

                    /* load the nodes structure */
                    nodes = (orte_node_t**)orte_node_pool->addr;

                    /* Is it a new request or just a new detection? */
                    if (procs[proc.vpid]->state == state || ORTE_PROC_STATE_RESTORE == procs[proc.vpid]->state) {
                        if (orte_debug_daemons_flag) {
                            opal_output(0, "%s orted_update_state: the process %s is already restarting (state=%d)",
                                        ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), ORTE_NAME_PRINT(&proc), (int)state);
                        }
                        break;
                    } else {
                        if (orte_debug_daemons_flag) {
                            opal_output(0, "%s orted_update_state: updating state (%d) for process %s",
                                        ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), (int)state, ORTE_NAME_PRINT(&proc));
                        }
                        procs[proc.vpid]->state = state;
                    }

                        if (orte_debug_daemons_flag) {
                            opal_output(0, "%s orted_update_state: update state request to %s (orted)",
                                        ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), ORTE_NAME_PRINT(&proc));
                        }

                        /* If and ORTED has fault, we need to update the nodes table to inform that the node dies */
                        if (orte_debug_daemons_flag) {
                            opal_output(0, "%s orted_update_state: updating state (%d) for node %s",
                                        ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), (int)node_state, procs[proc.vpid]->node->name);
                        }
                        node_state = ORTE_NODE_STATE_DOWN;
                        procs[proc.vpid]->node->state = node_state;

                        /* to all process on the faulty node... */
                        procs_rec = (orte_proc_t**)procs[proc.vpid]->node->procs->addr;
                        for (i=0; i < (int)procs[proc.vpid]->node->num_procs; i++) {
                            /* ...request a restart to its protector */
                            if (orte_debug_daemons_flag) {
                                opal_output(0, "%s orted_update_state: requesting to %s a (protector) restart for application %s",
                                            ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
                                            ORTE_NAME_PRINT(&(procs_rec[i]->protector)),
                                            ORTE_NAME_PRINT(&proc));
                            }
                            request_restart(&(procs_rec[i]->name), &(procs_rec[i]->protector), 0);
                        }
                    //}
                } /* end if HNP */
            }
