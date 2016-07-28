<?
$subject_val = "[OMPI devel] JDATA access problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 14:42:13 2011" -->
<!-- isoreceived="20110321184213" -->
<!-- sent="Mon, 21 Mar 2011 19:40:14 +0100" -->
<!-- isosent="20110321184014" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="[OMPI devel] JDATA access problem." -->
<!-- id="AANLkTim4UnD6Tgp8nRcg26QezAy3w3P31-TitzOCRk-G_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] JDATA access problem.<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 14:40:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9108.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Previous message:</strong> <a href="9106.php">Jeff Squyres: "[OMPI devel] CMR floodgates open for 1.5.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9108.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Reply:</strong> <a href="9108.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello @ll.
<br>
<p>I'm having a problem when i try to access to data-&gt;procs-&gt;addr[vpid] when
<br>
the vpid belong to a recently killed process. I'm sending here a piece of my
<br>
code. The problem is that the execution is always entering in the last if
<br>
clause maybe because the information of the dead process is no longer
<br>
available, or maybe i'm doing something wrong when accessing.
<br>
<p>Any help will be apreciated.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*command =
<br>
ORTE_DAEMON_REPORT_JOB_INFO_CMD;*
<br>
*                                        buffer = OBJ_NEW(opal_buffer_t);*
<br>
*                                        if (ORTE_SUCCESS != (rc =
<br>
opal_dss.pack(buffer, &amp;command, 1, ORTE_DAEMON_CMD))) {*
<br>
*                                            ORTE_ERROR_LOG(rc);*
<br>
*                                            OBJ_RELEASE(buffer);*
<br>
*                                            return rc;*
<br>
*                                        }*
<br>
*                                        if (ORTE_SUCCESS != (rc =
<br>
opal_dss.pack(buffer, &amp;proc-&gt;jobid, 1, ORTE_JOBID))) {*
<br>
*                                            ORTE_ERROR_LOG(rc);*
<br>
*                                            OBJ_RELEASE(buffer);*
<br>
*                                            return rc;*
<br>
*                                        }*
<br>
*                                        /* do the send */*
<br>
*                                        if (0 &gt; (rc =
<br>
orte_rml.send_buffer(ORTE_PROC_MY_HNP, buffer, ORTE_RML_TAG_DAEMON, 0))) {*
<br>
*                                            ORTE_ERROR_LOG(rc);*
<br>
*                                            OBJ_RELEASE(buffer);*
<br>
*                                            return rc;*
<br>
*                                        }*
<br>
*                                        OBJ_RELEASE(buffer);*
<br>
*                                        buffer = OBJ_NEW(opal_buffer_t);*
<br>
*
<br>
*
<br>
*
<br>
&nbsp;orte_rml.recv_buffer(ORTE_NAME_WILDCARD, buffer, ORTE_RML_TAG_TOOL, 0);*
<br>
*                                        *
<br>
*                                        opal_dss.unpack(buffer, &amp;response,
<br>
&amp;n, OPAL_INT32);*
<br>
*
<br>
*
<br>
*                                        if(response==0){*
<br>
*                                            OPAL_OUTPUT_VERBOSE((5,
<br>
orte_errmgr_base.output,&quot;NO ESCRIB&#205; AL HNP\n &quot;));*
<br>
*                                        }else{*
<br>
*                                            opal_dss.unpack(buffer, &amp;jdata,
<br>
&amp;n, ORTE_JOB);*
<br>
*                                        }*
<br>
*
<br>
*
<br>
*                                        procs =
<br>
(orte_proc_t**)jdata-&gt;procs-&gt;addr;*
<br>
*                                        if(procs==NULL){*
<br>
*                                            OPAL_OUTPUT_VERBOSE((5,
<br>
orte_errmgr_base.output, &quot;grave: procs==null&quot;));*
<br>
*                                        }*
<br>
*
<br>
*
<br>
*                                        command =
<br>
ORTE_DAEMON_UPDATE_STATE_CMD;*
<br>
*
<br>
*
<br>
*                                        OBJ_RELEASE(buffer);*
<br>
*                                        buffer = OBJ_NEW(opal_buffer_t);*
<br>
*                                        *
<br>
*                                        if (ORTE_SUCCESS != (rc =
<br>
opal_dss.pack(buffer, &amp;command, 1, ORTE_DAEMON_CMD))) {*
<br>
*                                            ORTE_ERROR_LOG(rc);*
<br>
*                                            OBJ_RELEASE(buffer);*
<br>
*                                            goto CLEANUP;*
<br>
*                                        }*
<br>
*
<br>
*
<br>
*                                        orte_proc_state_t state =
<br>
ORTE_PROC_STATE_FAULT;*
<br>
*                                        /* Pack the faulty vpid */*
<br>
*                                        if (ORTE_SUCCESS != (rc =
<br>
opal_dss.pack(buffer, &amp;proc, 1, ORTE_NAME))) {*
<br>
*                                            ORTE_ERROR_LOG(rc);*
<br>
*                                            goto CLEANUP;*
<br>
*                                        }*
<br>
*
<br>
*
<br>
*                                        /* Pack the state */*
<br>
*                                        if (ORTE_SUCCESS != (rc =
<br>
opal_dss.pack(buffer, &amp;state, 1, OPAL_UINT16))) {*
<br>
*                                            ORTE_ERROR_LOG(rc);*
<br>
*                                            goto CLEANUP;*
<br>
*                                        }*
<br>
*
<br>
*
<br>
*                                        if (NULL == procs[proc-&gt;vpid] ||
<br>
NULL == procs[proc-&gt;vpid]-&gt;node) {*
<br>
*                                            OPAL_OUTPUT_VERBOSE((5,
<br>
orte_errmgr_base.output, &quot;PROBLEM: procs[proc.vpid]==null&quot;));*
<br>
*                                        }*
<br>
*
<br>
*
<br>
Thanks a lot.
<br>
<p>Hugo Meyer
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9107/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9108.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Previous message:</strong> <a href="9106.php">Jeff Squyres: "[OMPI devel] CMR floodgates open for 1.5.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9108.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Reply:</strong> <a href="9108.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
