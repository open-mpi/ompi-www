<?
$subject_val = "Re: [OMPI users] Tight integration and interactive sessions with SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 03:47:07 2008" -->
<!-- isoreceived="20081113084707" -->
<!-- sent="Thu, 13 Nov 2008 09:46:55 +0100" -->
<!-- isosent="20081113084655" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tight integration and interactive sessions with SGE" -->
<!-- id="11D5AF00-92EB-42B6-9582-3A2015F9B65F_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="491BB007.7010708_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Tight integration and interactive sessions with SGE<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-13 03:46:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7305.php">Jeff Squyres: "[OMPI users] Open MPI at SC'08: win a Wii!"</a>
<li><strong>Previous message:</strong> <a href="7303.php">Scott Beardsley: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>In reply to:</strong> <a href="7303.php">Scott Beardsley: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7308.php">Scott Beardsley: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>Reply:</strong> <a href="7308.php">Scott Beardsley: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 13.11.2008 um 05:41 schrieb Scott Beardsley:
<br>
<p><span class="quotelev1">&gt; Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; qlogin will create a completely fresh bash, which is not aware of  
</span><br>
<span class="quotelev2">&gt;&gt; running under SGE. Although you could set the SGE_* variables by  
</span><br>
<span class="quotelev2">&gt;&gt; hand, it's easier to use an interactive session with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the past we'd source some sge script and SLOTS, TMPDIR, etc were  
</span><br>
<span class="quotelev1">&gt; populated.
</span><br>
<p>What do you mean by &quot;in the past&quot; - you upgraded SGE from version x  
<br>
to version y? You can still source &lt;execd-spool&gt;/&lt;nodename&gt;/ 
<br>
&lt;active_jobs&gt;/&lt;job_id&gt;.1/environment.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ qrsh -pe orte 4 /path/to/binary
</span><br>
<span class="quotelev2">&gt;&gt; If you really need a shell, you can get one with:
</span><br>
<span class="quotelev2">&gt;&gt; $ qrsh -pe orte 4 bash -il
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That breaks my shell (erase, history, tab-completion) but it seems  
</span><br>
<span class="quotelev1">&gt; to work other than that. Any suggestions on getting a unique list  
</span><br>
<span class="quotelev1">&gt; of nodes without touching them N times (N=# of slots assigned)? I  
</span><br>
<span class="quotelev1">&gt; guess I could do &quot;mpirun uname -n|sort -u&quot; but that just seems,  
</span><br>
<span class="quotelev1">&gt; well, wrong.
</span><br>
<p>There is nothing stopping you to define a start/stop_proc_args script  
<br>
anyway. You could use the example in $SGE_ROOT/mpi and then call this  
<br>
script with -uniq which will give you a list in the usual $TMPDIR/ 
<br>
machines file. You can even create and remove the temporary  
<br>
directories in this script(s), so you don't have to do it by hand  
<br>
every time you run an interactive parallel job.
<br>
<p>-- Reuti
<br>
<p>BTW: To avoid saving of the history in the bash and/or sourcing the  
<br>
environment:
<br>
<p>MYPARENT=`ps -p $$ -o ppid --no-header`
<br>
MYSTARTUP=`ps -p $MYPARENT -o command --no-header`
<br>
<p>if [ &quot;${MYSTARTUP:0:13}&quot; = &quot;sge_shepherd-&quot; ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;Running inside SGE&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MYJOBID=${MYSTARTUP:13}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MYJOBID=${MYJOBID% -bg}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;Job $MYJOBID&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;. /usr/sge/default/spool/$HOSTNAME/active_jobs/$MYJOBID.1/ 
<br>
environment
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unset HISTFILE   # don't save the history
<br>
fi
<br>
<p><p><span class="quotelev1">&gt; In any case, thanks for the tips!
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="7305.php">Jeff Squyres: "[OMPI users] Open MPI at SC'08: win a Wii!"</a>
<li><strong>Previous message:</strong> <a href="7303.php">Scott Beardsley: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>In reply to:</strong> <a href="7303.php">Scott Beardsley: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7308.php">Scott Beardsley: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>Reply:</strong> <a href="7308.php">Scott Beardsley: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
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
