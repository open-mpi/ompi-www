<?
$subject_val = "Re: [OMPI users] SGE tight integration and ?tm? protocol for start";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 11 07:56:08 2008" -->
<!-- isoreceived="20081011115608" -->
<!-- sent="Sat, 11 Oct 2008 07:56:02 -0400" -->
<!-- isosent="20081011115602" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE tight integration and ?tm? protocol for start" -->
<!-- id="3E62159B-14B9-4D44-96F6-0345079BCCE5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="264855a00810091340ye476713k47554ddd94773f75_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SGE tight integration and ?tm? protocol for start<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-11 07:56:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6949.php">Jeff Squyres: "Re: [OMPI users] --enable-static --enable-shared using intel compilers"</a>
<li><strong>Previous message:</strong> <a href="6947.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>In reply to:</strong> <a href="6928.php">Sean Davis: "[OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6954.php">Pak Lui: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know much/anything about SGE (I'll leave that to the Sun folks  
<br>
on this list to reply), but I can tell you about the tm plugins: tm is  
<br>
the protocol used by the PBS/Torque family of launchers.  It looks  
<br>
like your Open MPI was built with TM support, but when you launch,  
<br>
it's likely unable to find the support libraries that it needs to load  
<br>
those plugins.
<br>
<p>This is probably fine in your case, since you want to use SGE, not TM.
<br>
<p><p>On Oct 9, 2008, at 4:40 PM, Sean Davis wrote:
<br>
<p><span class="quotelev1">&gt; I am relatively new to OpenMPI and Sun Grid Engine parallel
</span><br>
<span class="quotelev1">&gt; integration.  I have a small cluster that is running SGE6.2 on linux
</span><br>
<span class="quotelev1">&gt; machines all using Intel Xeon processors.  I have installed OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.2.7 from source using the --with-sge switch.  Now, I am trying to
</span><br>
<span class="quotelev1">&gt; troubleshoot some problems I am having.  I have created a simple job
</span><br>
<span class="quotelev1">&gt; script:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The job script looks like:
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; mpirun --mca pls_gridengine_verbose 1 -np $NSLOTS hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the output on the error stream:
</span><br>
<span class="quotelev2">&gt;&gt; more junksub.sh.e3574
</span><br>
<span class="quotelev1">&gt; [shakespeare:05720] mca: base: component_find: unable to open ras tm:
</span><br>
<span class="quotelev1">&gt; file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [shakespeare:05720] mca: base: component_find: unable to open pls tm:
</span><br>
<span class="quotelev1">&gt; file not found (ignored)
</span><br>
<span class="quotelev1">&gt; Starting server daemon at host &quot;shakespeare.nci.nih.gov&quot;
</span><br>
<span class="quotelev1">&gt; Starting server daemon at host &quot;octopus.nci.nih.gov&quot;
</span><br>
<span class="quotelev1">&gt; Server daemon successfully started with task id &quot;1.shakespeare&quot;
</span><br>
<span class="quotelev1">&gt; [shakespeare:05733] mca: base: component_find: unable to open ras tm:
</span><br>
<span class="quotelev1">&gt; file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [shakespeare:05733] mca: base: component_find: unable to open pls tm:
</span><br>
<span class="quotelev1">&gt; file not found (ignored)
</span><br>
<span class="quotelev1">&gt; error: executing task of job 3576 failed: failed sending task to
</span><br>
<span class="quotelev1">&gt; execd_at_[hidden]: can't find connecti
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev1">&gt; [shakespeare:05720] ERROR: A daemon on node octopus.nci.nih.gov failed
</span><br>
<span class="quotelev1">&gt; to start as expected.
</span><br>
<span class="quotelev1">&gt; [shakespeare:05720] ERROR: There may be more information available  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; [shakespeare:05720] ERROR: the 'qstat -t' command on the Grid Engine  
</span><br>
<span class="quotelev1">&gt; tasks.
</span><br>
<span class="quotelev1">&gt; [shakespeare:05720] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev1">&gt; [shakespeare:05720] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev1">&gt; [shakespeare:05720] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev1">&gt; status 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, there is no output in any output stream.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And if I log into shakespeare and qrsh -q all.q_at_octopus, I immediately
</span><br>
<span class="quotelev1">&gt; get a slot, so there isn't a &quot;direct&quot; problem with connecting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I got a hint from folks on the SGE mailing list, it appears that
</span><br>
<span class="quotelev1">&gt; qrsh is not being used for job submission.  Any suggestions as to why
</span><br>
<span class="quotelev1">&gt; this might be the case (or if it is the case)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sean
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="6949.php">Jeff Squyres: "Re: [OMPI users] --enable-static --enable-shared using intel compilers"</a>
<li><strong>Previous message:</strong> <a href="6947.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>In reply to:</strong> <a href="6928.php">Sean Davis: "[OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6954.php">Pak Lui: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
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
