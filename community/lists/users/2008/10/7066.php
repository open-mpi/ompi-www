<?
$subject_val = "Re: [OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 18:25:07 2008" -->
<!-- isoreceived="20081021222507" -->
<!-- sent="Tue, 21 Oct 2008 15:16:33 -0700" -->
<!-- isosent="20081021221633" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="1E72C1C2-BF54-4B8C-A2EE-367D2BE4F1BE_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A0801CEC7AFED846978515099D145DA512837379B6_at_ES01SNLNT.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI runtime-specific environment variable?<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-21 18:16:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7067.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7065.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7065.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7067.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>I'm not sure I understand the problem. The ale3d program from LLNL  
<br>
operates exactly as you describe and it can be built with mpich, lam,  
<br>
or openmpi.
<br>
<p>Doug Reeder
<br>
On Oct 21, 2008, at 3:08 PM, Adams, Brian M wrote:
<br>
<p><span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Reuti
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, October 21, 2008 11:36 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OpenMPI runtime-specific
</span><br>
<span class="quotelev2">&gt;&gt; environment variable?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 21.10.2008 um 18:52 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 21, 2008, at 10:37 AM, Adams, Brian M wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Doug is right that we could use an additional command line flag to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; indicate MPI runs, but at this point, we're trying to hide
</span><br>
<span class="quotelev2">&gt;&gt; that from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the user, such that all they have to do is run the binary vs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orterun/mpirun the binary and we detect whether it's a serial or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parallel run.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And when you have this information you decide for your user,
</span><br>
<span class="quotelev2">&gt;&gt; whether to use mpirun (and the correct version to use) or
</span><br>
<span class="quotelev2">&gt;&gt; just the plain binary?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I might have created some confusion here too.  The goal is to build  
</span><br>
<span class="quotelev1">&gt; an MPI-enabled binary 'foo' which a user may invoke as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1) ./foo
</span><br>
<span class="quotelev1">&gt; -OR-
</span><br>
<span class="quotelev1">&gt; (2) mpirun -np 4 ./foo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The binary foo then determines at run-time whether it is to run in  
</span><br>
<span class="quotelev1">&gt; (1) serial, where MPI_Init will never be called; or (2) parallel,  
</span><br>
<span class="quotelev1">&gt; calling MPI_Init and so on.  This is a historical behavior which we  
</span><br>
<span class="quotelev1">&gt; need to preserve, at least for our present software release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You are making something like &quot;strings the_binary&quot; and grep
</span><br>
<span class="quotelev2">&gt;&gt; for indications of the compilation type? For the standard
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI with shared libraries a &quot;ldd the_binary&quot; might
</span><br>
<span class="quotelev2">&gt;&gt; reveal some information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hadn't thought to do that actually, since it addresses a slightly  
</span><br>
<span class="quotelev1">&gt; different problem than I propose above.  Thanks for the  
</span><br>
<span class="quotelev1">&gt; suggestion.  This is another possibility if instead of doing this  
</span><br>
<span class="quotelev1">&gt; detection directly in our binary, we decide to change to a wrapper  
</span><br>
<span class="quotelev1">&gt; script approach.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In any case, I appreciate all the discussion -- I believe I have a  
</span><br>
<span class="quotelev1">&gt; reasonable path forward using a combination of pre-processor  
</span><br>
<span class="quotelev1">&gt; defines that the OMPI wrappers and headers make with the runtime  
</span><br>
<span class="quotelev1">&gt; environment variables Ralph suggested (I'll just check for both the  
</span><br>
<span class="quotelev1">&gt; &lt;1.3 and &gt;= 1.3 environment cases).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
<li><strong>Next message:</strong> <a href="7067.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7065.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7065.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7067.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
