<?
$subject_val = "Re: [OMPI users] mpirun exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 21:22:25 2009" -->
<!-- isoreceived="20090320012225" -->
<!-- sent="Thu, 19 Mar 2009 21:22:18 -0400" -->
<!-- isosent="20090320012218" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun exit status" -->
<!-- id="633960AD-CFB9-4202-B281-12EF74D7925B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49C25DAC.1030407_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 21:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8523.php">Jeff Squyres: "Re: [OMPI users] v1.3 on Mac OS X with PGI 8.0"</a>
<li><strong>Previous message:</strong> <a href="8521.php">Gary Draving: "[OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<li><strong>In reply to:</strong> <a href="8514.php">Cristian KLEIN: "[OMPI users] mpirun exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8525.php">Cristian KLEIN: "Re: [OMPI users] mpirun exit status"</a>
<li><strong>Reply:</strong> <a href="8525.php">Cristian KLEIN: "Re: [OMPI users] mpirun exit status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe that this was just fixed in OMPI v1.3.1 -- could you try  
<br>
upgrading?
<br>
<p>On Mar 19, 2009, at 10:58 AM, Cristian KLEIN wrote:
<br>
<p><span class="quotelev1">&gt; Hello everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been using OpenMPI 1.3's mpirun in Makefiles and observed that  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; exit status is not always the one I expect. For example, using an
</span><br>
<span class="quotelev1">&gt; incorrect machinefile makes mpirun return 0, whereas a non-zero value
</span><br>
<span class="quotelev1">&gt; would be expected:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- cut here ---
</span><br>
<span class="quotelev1">&gt; masternode:~/grid/myTests/hellompi$ env | grep OMPI
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_plm_rsh_agent=ssh
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_tcp_if_exclude=lo,myri0
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl=self,tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; masternode:~/grid/myTests/hellompi$ mpirun.openmpi -machinefile  
</span><br>
<span class="quotelev1">&gt; hostfile
</span><br>
<span class="quotelev1">&gt; ./hellompi.openmpi; echo $?
</span><br>
<span class="quotelev1">&gt; ssh: incorrecthost2.example.com: Name or service not known
</span><br>
<span class="quotelev1">&gt; ssh: incorrecthost1.example.com: Name or service not known
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; --- end here ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem comes from the fact that the exitstatus of a process is  
</span><br>
<span class="quotelev1">&gt; ORed
</span><br>
<span class="quotelev1">&gt; with 0xFF and OpenMPI does not take this into consideration. In my
</span><br>
<span class="quotelev1">&gt; example, the exit status generated was 65280, which has the lower 8  
</span><br>
<span class="quotelev1">&gt; bits
</span><br>
<span class="quotelev1">&gt; zero.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To solve this problem I suggest the attached patch. If the exitstatus
</span><br>
<span class="quotelev1">&gt; would become zero, it replaces it with 111, where 111 is obviously a
</span><br>
<span class="quotelev1">&gt; randomly chosen non-zero number. :D
</span><br>
<span class="quotelev1">&gt; --- orte/runtime/orte_globals.h.orig	2009-01-09 18:55:22.000000000  
</span><br>
<span class="quotelev1">&gt; +0100
</span><br>
<span class="quotelev1">&gt; +++ orte/runtime/orte_globals.h	2009-03-19 15:44:06.822708734 +0100
</span><br>
<span class="quotelev1">&gt; @@ -109,11 +109,14 @@
</span><br>
<span class="quotelev1">&gt; #define  
</span><br>
<span class="quotelev1">&gt; ORTE_UPDATE_EXIT_STATUS(newstatus)                                  \
</span><br>
<span class="quotelev1">&gt;     do  
</span><br>
<span class="quotelev1">&gt; {                                                                    \
</span><br>
<span class="quotelev1">&gt;         if (0 == orte_exit_status &amp;&amp; 0 != newstatus)  
</span><br>
<span class="quotelev1">&gt; {                      \
</span><br>
<span class="quotelev1">&gt; +			if ((newstatus &amp; 0377) == 0)									\
</span><br>
<span class="quotelev1">&gt; +				orte_exit_status = 111;		          						\
</span><br>
<span class="quotelev1">&gt; +			else                                                            \
</span><br>
<span class="quotelev1">&gt; +				orte_exit_status = newstatus;                               \
</span><br>
<span class="quotelev1">&gt;             OPAL_OUTPUT_VERBOSE((1,  
</span><br>
<span class="quotelev1">&gt; orte_debug_output,                      \
</span><br>
<span class="quotelev1">&gt;                                  &quot;%s:%s(%d) updating exit status to  
</span><br>
<span class="quotelev1">&gt; %d&quot;,    \
</span><br>
<span class="quotelev1">&gt;                                   
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),        \
</span><br>
<span class="quotelev1">&gt; -                                 __FILE__, __LINE__,  
</span><br>
<span class="quotelev1">&gt; newstatus));           \
</span><br>
<span class="quotelev1">&gt; -            orte_exit_status =  
</span><br>
<span class="quotelev1">&gt; newstatus;                                   \
</span><br>
<span class="quotelev1">&gt; +                                 __FILE__, __LINE__,  
</span><br>
<span class="quotelev1">&gt; orte_exit_status));    \
</span><br>
<span class="quotelev1">&gt;         }                                                                   \
</span><br>
<span class="quotelev1">&gt;     } while(0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ATT5772424.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8523.php">Jeff Squyres: "Re: [OMPI users] v1.3 on Mac OS X with PGI 8.0"</a>
<li><strong>Previous message:</strong> <a href="8521.php">Gary Draving: "[OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<li><strong>In reply to:</strong> <a href="8514.php">Cristian KLEIN: "[OMPI users] mpirun exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8525.php">Cristian KLEIN: "Re: [OMPI users] mpirun exit status"</a>
<li><strong>Reply:</strong> <a href="8525.php">Cristian KLEIN: "Re: [OMPI users] mpirun exit status"</a>
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
