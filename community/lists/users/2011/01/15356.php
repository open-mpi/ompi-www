<?
$subject_val = "Re: [OMPI users] More newbie question: --hostfile option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 22:27:31 2011" -->
<!-- isoreceived="20110113032731" -->
<!-- sent="Wed, 12 Jan 2011 19:22:48 -0800" -->
<!-- isosent="20110113032248" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] More newbie question: --hostfile option" -->
<!-- id="C953B008.DCC4%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="AANLkTi=6HuKG9dYqppaq-dxXLJ_8OQ1AVqf77B+BXR=T_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] More newbie question: --hostfile option<br>
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-12 22:22:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15357.php">Tena Sakai: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Previous message:</strong> <a href="15355.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="15353.php">David Zhang: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15354.php">Gus Correa: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, David.  That did it!
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden]
<br>
<p><p>On 1/12/11 6:40 PM, &quot;David Zhang&quot; &lt;solarbikedz_at_[hidden]&gt; wrote:
<br>
<p>I think you just make a hostfile with
<br>
<p>vixen
<br>
compute-0-0
<br>
...
<br>
<p>and load the file in the first -H before the colon.
<br>
<p>On Wed, Jan 12, 2011 at 6:23 PM, Tena Sakai &lt;tsakai_at_[hidden]&gt; wrote:
<br>
Hi,
<br>
<p>I can execute the command below:
<br>
&nbsp;&nbsp;&nbsp;$ mpirun -H vixen -np 1 hostname : -H compute-0-0,compute-0-1,compute-0-2 -np 3 hostname
<br>
and I get:
<br>
&nbsp;&nbsp;&nbsp;vixen.egcrc.org &lt;<a href="http://vixen.egcrc.org">http://vixen.egcrc.org</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;compute-0-0.local
<br>
&nbsp;&nbsp;&nbsp;compute-0-1.local
<br>
&nbsp;&nbsp;&nbsp;compute-0-2.local
<br>
<p>I have a file myhosts, which looks like:
<br>
&nbsp;&nbsp;&nbsp;compute-0-0 slots=1
<br>
&nbsp;&nbsp;&nbsp;compute-0-1 slots=1
<br>
&nbsp;&nbsp;&nbsp;compute-0-2 slots=1
<br>
but when I execute:
<br>
&nbsp;&nbsp;&nbsp;$ mpirun -H vixen -np 1 hostname : --hostfile myhosts -np 3 hostname
<br>
I get:
<br>
&nbsp;&nbsp;&nbsp;There are no allocated resources for the application
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostname
<br>
&nbsp;&nbsp;&nbsp;that match the requested mapping:
<br>
<p>&nbsp;&nbsp;&nbsp;Verify that you have mapped the allocated resources properly using the
<br>
&nbsp;&nbsp;&nbsp;--host or --hostfile specification.
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
&nbsp;&nbsp;&nbsp;launch so we are aborting.
<br>
<p>&nbsp;&nbsp;&nbsp;There may be more information reported by the environment (see above).
<br>
<p>&nbsp;&nbsp;&nbsp;This may be because the daemon was unable to find all the needed shared
<br>
&nbsp;&nbsp;&nbsp;libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
&nbsp;&nbsp;&nbsp;location of the shared libraries on the remote nodes and this will
<br>
&nbsp;&nbsp;&nbsp;automatically be forwarded to the remote nodes.
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;mpirun noticed that the job aborted, but has no info as to the process
<br>
&nbsp;&nbsp;&nbsp;that caused that situation.
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;mpirun: clean termination accomplished
<br>
<p>Interestingly, this works:
<br>
&nbsp;&nbsp;&nbsp;$ mpirun --hostfile myhosts -np 3 hostname
<br>
&nbsp;&nbsp;&nbsp;compute-0-0.local
<br>
&nbsp;&nbsp;&nbsp;compute-0-1.local
<br>
&nbsp;&nbsp;&nbsp;compute-0-2.local
<br>
&nbsp;&nbsp;&nbsp;$
<br>
<p>Am I correct in concluding that &#150;H and &#151;hostfile cannot be issued in the
<br>
same mpirun command which contains a colon (:)?  Or is there any trick
<br>
or work-around to have both &#150;H and &#151;hostfile?
<br>
<p>Thank you.
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden] &lt;<a href="http://tsakai&#64;gallo.ucsf.edu">http://tsakai&#64;gallo.ucsf.edu</a>&gt;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15356/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15357.php">Tena Sakai: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Previous message:</strong> <a href="15355.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="15353.php">David Zhang: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15354.php">Gus Correa: "Re: [OMPI users] More newbie question: --hostfile option"</a>
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
