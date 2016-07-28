<?
$subject_val = "Re: [OMPI users] Bug in ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 21 09:45:50 2009" -->
<!-- isoreceived="20090521134550" -->
<!-- sent="Thu, 21 May 2009 09:45:45 -0400" -->
<!-- isosent="20090521134545" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in ompi-restart" -->
<!-- id="EE420643-C00A-402A-9B98-C4F4A463A931_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A1558C3.80508_at_inrialpes.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in ompi-restart<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-21 09:45:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9415.php">jan: "[OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Previous message:</strong> <a href="9413.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Moving to ompi-users so that others might benefit from the answer)
<br>
<p>Currently you cannot pass the --prefix option to ompi-restart. In  
<br>
fact, most of the mpirun options are not exposed by the ompi-restart  
<br>
tool (it becomes difficult to maintain). To assist users that want to  
<br>
set additional options, I added the '--apponly' option which dumps an  
<br>
appfile that can be directly used by mpirun to restart the application.
<br>
<p>This appfile allows a user to modify the options to mpirun and each  
<br>
individual application process as they desire. Once the appfile is  
<br>
setup then the user can restart the application the same way ompi- 
<br>
restart does by calling:
<br>
&nbsp;&nbsp;&nbsp;mpirun -am ft-enable-cr --app your_appfile
<br>
<p>Hope that helps,
<br>
Josh
<br>
<p><p>On May 21, 2009, at 9:36 AM, Bouguerra mohamed slim wrote:
<br>
<p><span class="quotelev1">&gt; Dear Josh
</span><br>
<span class="quotelev1">&gt; Another problem with the ompi-restart. In fact, how i can give to  
</span><br>
<span class="quotelev1">&gt; ompi-restart the prefix option as in mpirun -prefix ~/xxx/xxx/ompi- 
</span><br>
<span class="quotelev1">&gt; r21254/lam
</span><br>
<span class="quotelev1">&gt; Hint in each node i sure that the LD_LIBRARY_PATH varibale containe  
</span><br>
<span class="quotelev1">&gt; the right path to ompi library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi-restart -hostfile hostfile_21_05 ompi_global_snapshot_4664.ckpt/ 
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 4754) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Cordialement,
</span><br>
<span class="quotelev1">&gt; Mohamed-Slim BOUGUERRA    PhD student INRIA-Grenoble / Projet MOAIS
</span><br>
<span class="quotelev1">&gt; ENSIMAG - antenne de Montbonnot
</span><br>
<span class="quotelev1">&gt; ZIRST 51, avenue Jean Kuntzmann
</span><br>
<span class="quotelev1">&gt; 38330 MONTBONNOT SAINT MARTIN France
</span><br>
<span class="quotelev1">&gt; Tel :+33 (0)4 76 61 20 79
</span><br>
<span class="quotelev1">&gt; Fax :+33 (0)4 76 61 20 99
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9415.php">jan: "[OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Previous message:</strong> <a href="9413.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
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
