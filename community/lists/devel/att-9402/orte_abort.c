/* -*- C -*-
 *
 * $HEADER$
 *
 * A program that just spins, with vpid 3 aborting - provides mechanism for testing
 * abnormal program termination
 */

#include <stdio.h>
#include <unistd.h>

#include "orte/runtime/runtime.h"
#include "orte/util/proc_info.h"
#include "orte/util/name_fns.h"
#include "orte/runtime/orte_globals.h"
#include "orte/mca/errmgr/errmgr.h"
#include "orte/mca/grpcomm/grpcomm.h"
#include "opal/class/opal_pointer_array.h"

static pid_t pid;
static char hostname[500];
static finished = 0;

void my_errhandler_runtime_callback(opal_pointer_array_t *procs);

void my_errhandler_runtime_callback(opal_pointer_array_t *procs) {
   printf("orte_abort: Name %s Host: %s Pid %ld "
           "-- In callback\n",
           ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
           hostname, (long)pid);
   fflush(NULL);
   sleep(1);
   finished = 1;
#if 0
   orte_errmgr.abort(ORTE_PROC_MY_NAME->vpid, NULL);
#endif
}

int main(int argc, char* argv[])
{
    int i, rc;
    int flags;

    flags = ORTE_PROC_NON_MPI;
    /* flags = ORTE_PROC_MPI; */
    if (0 > (rc = orte_init(&argc, &argv, flags))) {
        fprintf(stderr, "orte_abort: couldn't init orte - error code %d\n", rc);
        return rc;
    }
    pid = getpid();
    gethostname(hostname, 500);

    printf("orte_abort: Name %s Host: %s Pid %ld "
           "-- Initalized\n",
           ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
           hostname, (long)pid);

    orte_errmgr.set_fault_callback(my_errhandler_runtime_callback);

    orte_grpcomm.barrier();

    i = 0;
    while(finished == 0 ) {
        ++i;

        if( i > 10000 && 
            (ORTE_PROC_MY_NAME->vpid == 3 || 
             (orte_process_info.num_procs <= 3 && ORTE_PROC_MY_NAME->vpid == 0)) ) {

            printf("orte_abort: Name %s Host: %s Pid %ld "
                   "-- Calling Abort\n",
                   ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
                   hostname, (long)pid);
#if 1
            orte_errmgr.abort(ORTE_PROC_MY_NAME->vpid, NULL);
#else
            kill(getpid(), SIGKILL);
#endif
        }
    }

    printf("orte_abort: Name %s Host: %s Pid %ld "
           "-- Finish\n",
           ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
           hostname, (long)pid);

    if (ORTE_SUCCESS != orte_finalize()) {
        fprintf(stderr, "Failed orte_finalize\n");
        exit(1);
    }

    return 0;
}
