<?
$subject_val = "Re: [OMPI users] an environment variable with same meaning than the-x option of mpiexec";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  7 16:19:36 2009" -->
<!-- isoreceived="20091107211936" -->
<!-- sent="Sat, 7 Nov 2009 16:19:32 -0500" -->
<!-- isosent="20091107211932" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] an environment variable with same meaning than the-x option of mpiexec" -->
<!-- id="1D222138-E0FB-4D36-ACD1-1CFD5E43BE1D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3173BAB9-726B-4EE0-9BA6-5E2840C68EE5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] an environment variable with same meaning than the-x option of mpiexec<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-07 16:19:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11104.php">Martin Siegert: "[OMPI users] sending/receiving large buffers"</a>
<li><strong>Previous message:</strong> <a href="11102.php">Lee Amy: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>In reply to:</strong> <a href="11099.php">Ralph Castain: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11111.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than	the-x option of mpiexec"</a>
<li><strong>Reply:</strong> <a href="11111.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than	the-x option of mpiexec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, environment variables prefixed with &quot;OMPI_&quot; will automatically  
<br>
be distributed out to processes.  From mpirun(1):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Exported Environment Variables
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All  environment variables that are named in the form OMPI_*  
<br>
will auto-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matically be exported to new processes on the local and   
<br>
remote  nodes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The  -x  option  to  mpirun  can be used to export specific  
<br>
environment
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;variables to the new processes.  While the  syntax  of  the  - 
<br>
x  option
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allows  the  definition of new variables, note that the parser  
<br>
for this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;option is currently not very sophisticated - it does  not   
<br>
even  under-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stand  quoted  values.  Users are advised to set variables in  
<br>
the envi-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ronment and use -x to export them; not to define them.
<br>
<p>Depending on your environment and launcher, your entire environment  
<br>
may be copied out to all the processes, anyway (rsh does not, but  
<br>
environments like SLURM do), making the OMPI_* and -x mechanisms  
<br>
somewhat redundant.
<br>
<p>Does this help?
<br>
<p><p>On Nov 6, 2009, at 9:59 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Not at the moment - though I imagine we could create one. It is a tad
</span><br>
<span class="quotelev1">&gt; tricky in that we allow multiple -x options on the cmd line, but we
</span><br>
<span class="quotelev1">&gt; obviously can't do that with an envar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The most likely solution would be to specify multiple &quot;-x&quot; equivalents
</span><br>
<span class="quotelev1">&gt; by separating them with a comma in the envar. It would take some
</span><br>
<span class="quotelev1">&gt; parsing to make it all work, but not impossible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can add it to the &quot;to-do&quot; list for a rainy day :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 6, 2009, at 7:59 AM, Paul Kapinos wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear OpenMPI developer,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; with the -x option of mpiexec there is a way to distribute
</span><br>
<span class="quotelev2">&gt; &gt; environmnet variables:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -x &lt;env&gt;  Export  the  specified  environment  variables  to the
</span><br>
<span class="quotelev2">&gt; &gt; remote
</span><br>
<span class="quotelev2">&gt; &gt;                 nodes before executing the  program.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there an environment variable ( OMPI_....) with the same meaning?
</span><br>
<span class="quotelev2">&gt; &gt; The writing of environmnet variables on the command line is ugly and
</span><br>
<span class="quotelev2">&gt; &gt; tedious...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've searched for this info on OpenMPI web pages for about an hour
</span><br>
<span class="quotelev2">&gt; &gt; and didn't find the ansver :-/
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanking you in anticipation,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev2">&gt; &gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev2">&gt; &gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt; &gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11104.php">Martin Siegert: "[OMPI users] sending/receiving large buffers"</a>
<li><strong>Previous message:</strong> <a href="11102.php">Lee Amy: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>In reply to:</strong> <a href="11099.php">Ralph Castain: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11111.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than	the-x option of mpiexec"</a>
<li><strong>Reply:</strong> <a href="11111.php">Paul Kapinos: "Re: [OMPI users] an environment variable with same meaning than	the-x option of mpiexec"</a>
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
