<?
$subject_val = "Re: [OMPI users] mpirun exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 08:55:13 2009" -->
<!-- isoreceived="20090320125513" -->
<!-- sent="Fri, 20 Mar 2009 06:55:04 -0600" -->
<!-- isosent="20090320125504" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun exit status" -->
<!-- id="82A4679E-4447-4D7B-B938-5BE76953830D_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49C36E0C.9070102_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun exit status<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 08:55:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8530.php">Gary Draving: "Re: [OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<li><strong>Previous message:</strong> <a href="8528.php">Jeff Squyres: "Re: [OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<li><strong>In reply to:</strong> <a href="8525.php">Cristian KLEIN: "Re: [OMPI users] mpirun exit status"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 20, 2009, at 4:21 AM, Cristian KLEIN wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I believe that this was just fixed in OMPI v1.3.1 -- could you try
</span><br>
<span class="quotelev2">&gt;&gt; upgrading?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yup, the issue is well solved. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would just want to add one thing. Isn't the current solution a  
</span><br>
<span class="quotelev1">&gt; little
</span><br>
<span class="quotelev1">&gt; bit error prone. I mean, instead of having to check before each call  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; ORTE_UPDATE_EXIT_STATUS, whether the low 8 bits are indeed non-zero,
</span><br>
<span class="quotelev1">&gt; wouldn't it be wiser to have ORTE_UPDATE_EXIT_STATUS do the check?
</span><br>
<p>Because many times we set the exit status with a value that doesn't  
<br>
come from a process termination, but rather from some internal error  
<br>
return. In those cases, you can't use the usual OS-specific macros to  
<br>
test for abnormal termination, so you cannot put the test in the  
<br>
ORTE_UPDATE_EXIT_STATUS code.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 19, 2009, at 10:58 AM, Cristian KLEIN wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello everybody,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been using OpenMPI 1.3's mpirun in Makefiles and observed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exit status is not always the one I expect. For example, using an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; incorrect machinefile makes mpirun return 0, whereas a non-zero  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would be expected:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- cut here ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; masternode:~/grid/myTests/hellompi$ env | grep OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_plm_rsh_agent=ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_btl_tcp_if_exclude=lo,myri0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_btl=self,tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; masternode:~/grid/myTests/hellompi$ mpirun.openmpi -machinefile  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./hellompi.openmpi; echo $?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh: incorrecthost2.example.com: Name or service not known
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh: incorrecthost1.example.com: Name or service not known
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [snip]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- end here ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem comes from the fact that the exitstatus of a process  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is ORed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with 0xFF and OpenMPI does not take this into consideration. In my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; example, the exit status generated was 65280, which has the lower  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8 bits
</span><br>
<span class="quotelev3">&gt;&gt;&gt; zero.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To solve this problem I suggest the attached patch. If the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exitstatus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would become zero, it replaces it with 111, where 111 is obviously a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; randomly chosen non-zero number. :D
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- orte/runtime/orte_globals.h.orig    2009-01-09  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 18:55:22.000000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ orte/runtime/orte_globals.h    2009-03-19 15:44:06.822708734  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -109,11 +109,14 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_UPDATE_EXIT_STATUS 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (newstatus)                                  \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {                                                                    \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        if (0 == orte_exit_status &amp;&amp; 0 != newstatus)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {                      \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            if ((newstatus &amp; 0377) ==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0)                                    \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                orte_exit_status =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 111;                                          \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; else                                                            \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                orte_exit_status =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; newstatus;                               \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            OPAL_OUTPUT_VERBOSE((1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_debug_output,                      \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                 &quot;%s:%s(%d) updating exit status to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; %d&quot;,    \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),        \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                                 __FILE__, __LINE__,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; newstatus));           \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            orte_exit_status =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; newstatus;                                   \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                                 __FILE__, __LINE__,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_exit_status));    \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }                                                                   \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    } while(0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ATT5772424.txt&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8530.php">Gary Draving: "Re: [OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<li><strong>Previous message:</strong> <a href="8528.php">Jeff Squyres: "Re: [OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<li><strong>In reply to:</strong> <a href="8525.php">Cristian KLEIN: "Re: [OMPI users] mpirun exit status"</a>
<!-- nextthread="start" -->
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
