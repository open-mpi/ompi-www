<?
$subject_val = "Re: [OMPI users] problem with LD_LIBRARY_PATH???";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 11:00:48 2009" -->
<!-- isoreceived="20090819150048" -->
<!-- sent="Wed, 19 Aug 2009 15:00:42 +0000 (GMT)" -->
<!-- isosent="20090819150042" -->
<!-- name="Jean Potsam" -->
<!-- email="jeanpotsam_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with LD_LIBRARY_PATH???" -->
<!-- id="803877.56372.qm_at_web28315.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="71d2d8cc0908190739s6b8ec86bhd219dfe4f146f71d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with LD_LIBRARY_PATH???<br>
<strong>From:</strong> Jean Potsam (<em>jeanpotsam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 11:00:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10435.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Previous message:</strong> <a href="10433.php">Lenny Verkhovsky: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>In reply to:</strong> <a href="10432.php">Ralph Castain: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10433.php">Lenny Verkhovsky: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Thanks for the email. I am using openmpi 1.3.
<br>
<p>Jean
<br>
--- On Wed, 19/8/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p>From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] problem with LD_LIBRARY_PATH???
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Wednesday, 19 August, 2009, 2:39 PM
<br>
<p>What OMPI version are you using?
<br>
<p><p><p>On Wed, Aug 19, 2009 at 8:36 AM, Jean Potsam &lt;jeanpotsam_at_[hidden]&gt; wrote:
<br>
<p>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I'm a trying to install openmpi with self. However, I am experiencing some problems with openmpi itself.
<br>
<p>I have successfully installed the software and added the path in the .bashrc file as follows:
<br>
<p>export PATH=&quot;/home/jean/openmpisof/bin:$PATH&quot;
<br>
export LD_LIBRARY_PATH=&quot;/home/jean/openmpisof/lib:$LD_LIBRARY_PATH&quot;
<br>
<p>when i run my mpi application specifying the whole path to mpirun, it works fine. 
<br>
<p>jean:$ /home/jean/openmpisof/bin/mpirun mympi
<br>
<p>however if I do:
<br>
jean:$ mpirun mympi
<br>
<p>I get:
<br>
<p>################
<br>
bash: orted: command not found
<br>
--------------------------------------------------------------------------
<br>
<p>to launch so we are aborting.
<br>
<p>There may be more
 information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>######################
<br>
<p>I am using&#160; a single processor desktop PC with linux Ubuntu as the OS. 
<br>
<p>Please email me of you have any solution for this problem.
<br>
<p>Cheers
<br>
<p>Jean
<br>
<p><p><p><p><p><p>_______________________________________________
<br>
<p><p><p><p><p>-----Inline Attachment Follows-----
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10434/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10435.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Previous message:</strong> <a href="10433.php">Lenny Verkhovsky: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>In reply to:</strong> <a href="10432.php">Ralph Castain: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10433.php">Lenny Verkhovsky: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
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
