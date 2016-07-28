<?
$subject_val = "Re: [OMPI users] tcp connectivity OS X and 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 20:35:24 2009" -->
<!-- isoreceived="20090812003524" -->
<!-- sent="Tue, 11 Aug 2009 20:35:15 -0400" -->
<!-- isosent="20090812003515" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp connectivity OS X and 1.3.3" -->
<!-- id="4A820E43.3020404_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="612D4935-B6D3-4717-9F29-FFF595A423B0_at_uvic.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp connectivity OS X and 1.3.3<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 20:35:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10313.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10311.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="10306.php">Jody Klymak: "[OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10313.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10313.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody
<br>
<p>Are you sure you have the same OpenMPI version installed on 
<br>
/usr/local/openmpi on *all* nodes?
<br>
<p>The fact that the programs run on the xserver0, but hang
<br>
when you try xserver0 and xserver1 together suggest
<br>
some inconsistency in the runtime environment,
<br>
which may come from different OpenMPI versions.
<br>
<p>You can check this, say, by logging in to each node and doing 
<br>
/usr/local/openmpi/bin/ompi_info and comparing the output.
<br>
<p>Anyway, this is just a guess.
<br>
<p>Gus Correa
<br>
<p><p>Jody Klymak wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 11, 2009, at  8:15 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can turn off those mca params I gave you as you are now past that 
</span><br>
<span class="quotelev2">&gt;&gt; point. I know there are others that can help debug that TCP btl error, 
</span><br>
<span class="quotelev2">&gt;&gt; but they can help you there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to eliminate the mitgcm from the debugging I compiled 
</span><br>
<span class="quotelev1">&gt; example/hello_c.c and run as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /usr/local/openmpi/bin/mpirun --debug-daemons -n 8 -host xserve01 
</span><br>
<span class="quotelev1">&gt; hello_c &gt;&amp; hello_c4_1host.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is no ostensible problem.  If I run as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/bin/mpirun --debug-daemons -n 8 -host 
</span><br>
<span class="quotelev1">&gt; xserve01,xserve02 hello_c &gt;&amp; hello_c4_2host.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The process says Hello, but hangs at the end, and needs to be killed 
</span><br>
<span class="quotelev1">&gt; with ^C.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I then modified connectivity_c to include a printf as MPI is 
</span><br>
<span class="quotelev1">&gt; initialized, and hardwired verbose=1.  This completes, and appears to 
</span><br>
<span class="quotelev1">&gt; work fine..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/bin/mpirun --debug-daemons -n 8 -host xserve01 
</span><br>
<span class="quotelev1">&gt; connectivity_c &gt;&amp; connectivity_c8_1host.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, again, two hosts sours the mix:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/bin/mpirun --debug-daemons -n 8 -host 
</span><br>
<span class="quotelev1">&gt; xserve01,xserve02 connectivity_c &gt;&amp; connectivity_c8_2host.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This hangs, and after waiting a minute or so we see that rank 0--4 on 
</span><br>
<span class="quotelev1">&gt; xserve01 cannot contact rank 5 (presumably on xserve02).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that I have something wrong in my tcp setup, but communication 
</span><br>
<span class="quotelev1">&gt; between these servers worked yesterday using 1.1.5, and ping etc all 
</span><br>
<span class="quotelev1">&gt; work fine, so something else is up.  Some sort of port permissions?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Th most glaring error I see in these is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [xserve02.local:43625] [[28627,0],2] orte:daemon:send_relay - recipient 
</span><br>
<span class="quotelev1">&gt; list is empty!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see reference in the archives to a similar error where &quot;contacts.txt&quot; 
</span><br>
<span class="quotelev1">&gt; could not be found.  I've had trouble with 10.5.7 with temporary 
</span><br>
<span class="quotelev1">&gt; directories, so maybe that is the issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jody Klymak    
</span><br>
<span class="quotelev1">&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="10313.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10311.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="10306.php">Jody Klymak: "[OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10313.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10313.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
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
