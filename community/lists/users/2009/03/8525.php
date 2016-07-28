<?
$subject_val = "Re: [OMPI users] mpirun exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 06:21:08 2009" -->
<!-- isoreceived="20090320102108" -->
<!-- sent="Fri, 20 Mar 2009 11:21:00 +0100" -->
<!-- isosent="20090320102100" -->
<!-- name="Cristian KLEIN" -->
<!-- email="cristiklein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun exit status" -->
<!-- id="49C36E0C.9070102_at_gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="633960AD-CFB9-4202-B281-12EF74D7925B_at_cisco.com" -->
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
<strong>From:</strong> Cristian KLEIN (<em>cristiklein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 06:21:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8526.php">Jeff Squyres: "[OMPI users] New Open MPI release numbering scheme"</a>
<li><strong>Previous message:</strong> <a href="8524.php">Ricardo Fern&#225;ndez-Perea: "[OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>In reply to:</strong> <a href="8522.php">Jeff Squyres: "Re: [OMPI users] mpirun exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8529.php">Ralph Castain: "Re: [OMPI users] mpirun exit status"</a>
<li><strong>Reply:</strong> <a href="8529.php">Ralph Castain: "Re: [OMPI users] mpirun exit status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; I believe that this was just fixed in OMPI v1.3.1 -- could you try
</span><br>
<span class="quotelev1">&gt; upgrading?
</span><br>
<p>Yup, the issue is well solved. :)
<br>
<p>I would just want to add one thing. Isn't the current solution a little
<br>
bit error prone. I mean, instead of having to check before each call to
<br>
ORTE_UPDATE_EXIT_STATUS, whether the low 8 bits are indeed non-zero,
<br>
wouldn't it be wiser to have ORTE_UPDATE_EXIT_STATUS do the check?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 19, 2009, at 10:58 AM, Cristian KLEIN wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello everybody,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've been using OpenMPI 1.3's mpirun in Makefiles and observed that the
</span><br>
<span class="quotelev2">&gt;&gt; exit status is not always the one I expect. For example, using an
</span><br>
<span class="quotelev2">&gt;&gt; incorrect machinefile makes mpirun return 0, whereas a non-zero value
</span><br>
<span class="quotelev2">&gt;&gt; would be expected:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- cut here ---
</span><br>
<span class="quotelev2">&gt;&gt; masternode:~/grid/myTests/hellompi$ env | grep OMPI
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_plm_rsh_agent=ssh
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_tcp_if_exclude=lo,myri0
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl=self,tcp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; masternode:~/grid/myTests/hellompi$ mpirun.openmpi -machinefile hostfile
</span><br>
<span class="quotelev2">&gt;&gt; ./hellompi.openmpi; echo $?
</span><br>
<span class="quotelev2">&gt;&gt; ssh: incorrecthost2.example.com: Name or service not known
</span><br>
<span class="quotelev2">&gt;&gt; ssh: incorrecthost1.example.com: Name or service not known
</span><br>
<span class="quotelev2">&gt;&gt; [snip]
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt; --- end here ---
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem comes from the fact that the exitstatus of a process is ORed
</span><br>
<span class="quotelev2">&gt;&gt; with 0xFF and OpenMPI does not take this into consideration. In my
</span><br>
<span class="quotelev2">&gt;&gt; example, the exit status generated was 65280, which has the lower 8 bits
</span><br>
<span class="quotelev2">&gt;&gt; zero.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To solve this problem I suggest the attached patch. If the exitstatus
</span><br>
<span class="quotelev2">&gt;&gt; would become zero, it replaces it with 111, where 111 is obviously a
</span><br>
<span class="quotelev2">&gt;&gt; randomly chosen non-zero number. :D
</span><br>
<span class="quotelev2">&gt;&gt; --- orte/runtime/orte_globals.h.orig    2009-01-09 18:55:22.000000000
</span><br>
<span class="quotelev2">&gt;&gt; +0100
</span><br>
<span class="quotelev2">&gt;&gt; +++ orte/runtime/orte_globals.h    2009-03-19 15:44:06.822708734 +0100
</span><br>
<span class="quotelev2">&gt;&gt; @@ -109,11 +109,14 @@
</span><br>
<span class="quotelev2">&gt;&gt; #define
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_UPDATE_EXIT_STATUS(newstatus)                                  \
</span><br>
<span class="quotelev2">&gt;&gt;     do
</span><br>
<span class="quotelev2">&gt;&gt; {                                                                    \
</span><br>
<span class="quotelev2">&gt;&gt;         if (0 == orte_exit_status &amp;&amp; 0 != newstatus)
</span><br>
<span class="quotelev2">&gt;&gt; {                      \
</span><br>
<span class="quotelev2">&gt;&gt; +            if ((newstatus &amp; 0377) ==
</span><br>
<span class="quotelev2">&gt;&gt; 0)                                    \
</span><br>
<span class="quotelev2">&gt;&gt; +                orte_exit_status =
</span><br>
<span class="quotelev2">&gt;&gt; 111;                                          \
</span><br>
<span class="quotelev2">&gt;&gt; +           
</span><br>
<span class="quotelev2">&gt;&gt; else                                                            \
</span><br>
<span class="quotelev2">&gt;&gt; +                orte_exit_status =
</span><br>
<span class="quotelev2">&gt;&gt; newstatus;                               \
</span><br>
<span class="quotelev2">&gt;&gt;             OPAL_OUTPUT_VERBOSE((1,
</span><br>
<span class="quotelev2">&gt;&gt; orte_debug_output,                      \
</span><br>
<span class="quotelev2">&gt;&gt;                                  &quot;%s:%s(%d) updating exit status to
</span><br>
<span class="quotelev2">&gt;&gt; %d&quot;,    \
</span><br>
<span class="quotelev2">&gt;&gt;                                 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),        \
</span><br>
<span class="quotelev2">&gt;&gt; -                                 __FILE__, __LINE__,
</span><br>
<span class="quotelev2">&gt;&gt; newstatus));           \
</span><br>
<span class="quotelev2">&gt;&gt; -            orte_exit_status =
</span><br>
<span class="quotelev2">&gt;&gt; newstatus;                                   \
</span><br>
<span class="quotelev2">&gt;&gt; +                                 __FILE__, __LINE__,
</span><br>
<span class="quotelev2">&gt;&gt; orte_exit_status));    \
</span><br>
<span class="quotelev2">&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; }                                                                   \
</span><br>
<span class="quotelev2">&gt;&gt;     } while(0);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ATT5772424.txt&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8526.php">Jeff Squyres: "[OMPI users] New Open MPI release numbering scheme"</a>
<li><strong>Previous message:</strong> <a href="8524.php">Ricardo Fern&#225;ndez-Perea: "[OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>In reply to:</strong> <a href="8522.php">Jeff Squyres: "Re: [OMPI users] mpirun exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8529.php">Ralph Castain: "Re: [OMPI users] mpirun exit status"</a>
<li><strong>Reply:</strong> <a href="8529.php">Ralph Castain: "Re: [OMPI users] mpirun exit status"</a>
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
