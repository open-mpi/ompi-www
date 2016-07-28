Copyright (c) 2011-2012  FUJITSU LIMITED.  All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are
met:

* Redistributions of source code must retain the above copyright
notice, this list of conditions and the following disclaimer.

* Redistributions in binary form must reproduce the above copyright
notice, this list of conditions and the following disclaimer listed
in this license in the documentation and/or other materials
provided with the distribution.

* Neither the name of the copyright holders nor the names of its
contributors may be used to endorse or promote products derived from
this software without specific prior written permission.

The copyright holders provide no reassurances that the source code
provided does not infringe any patent, copyright, or any other
intellectual property rights of third parties.  The copyright holders
disclaim any liability to any recipient for claims brought against
recipient by any third party for infringement of that parties
intellectual property rights.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.


Index: ompi/mca/coll/tuned/coll_tuned_dynamic_rules.c
===================================================================
--- ompi/mca/coll/tuned/coll_tuned_dynamic_rules.c	(revision 25978)
+++ ompi/mca/coll/tuned/coll_tuned_dynamic_rules.c	(working copy)
@@ -350,7 +350,7 @@
  *
  */
 
-int ompi_coll_tuned_get_target_method_params (ompi_coll_com_rule_t* base_com_rule, int mpi_msgsize, int *result_topo_faninout, 
+int ompi_coll_tuned_get_target_method_params (ompi_coll_com_rule_t* base_com_rule, size_t mpi_msgsize, int *result_topo_faninout, 
                                               int* result_segsize, int* max_requests)
 {
     ompi_coll_msg_rule_t*  msg_p = (ompi_coll_msg_rule_t*) NULL;
Index: ompi/mca/coll/tuned/coll_tuned_dynamic_rules.h
===================================================================
--- ompi/mca/coll/tuned/coll_tuned_dynamic_rules.h	(revision 25978)
+++ ompi/mca/coll/tuned/coll_tuned_dynamic_rules.h	(working copy)
@@ -37,7 +37,7 @@
    int msg_rule_id; /* unique msg rule id */
 
    /* RULE */
-   int msg_size;    /* message size */
+   size_t msg_size; /* message size */
 
    /* RESULT */
    int result_alg;              /* result algorithm to use */
@@ -95,7 +95,7 @@
 
 ompi_coll_com_rule_t* ompi_coll_tuned_get_com_rule_ptr (ompi_coll_alg_rule_t* rules, int alg_id, int mpi_comsize);
 
-int ompi_coll_tuned_get_target_method_params (ompi_coll_com_rule_t* base_com_rule, int mpi_msgsize, 
+int ompi_coll_tuned_get_target_method_params (ompi_coll_com_rule_t* base_com_rule, size_t mpi_msgsize, 
                                               int* result_topo_faninout, int* result_segsize, 
                                               int* max_requests);
 