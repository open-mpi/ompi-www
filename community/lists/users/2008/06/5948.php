<?
$subject_val = "Re: [OMPI users] Displaying Selected MCA Modules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 08:29:34 2008" -->
<!-- isoreceived="20080620122934" -->
<!-- sent="Fri, 20 Jun 2008 08:29:25 -0400" -->
<!-- isosent="20080620122925" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Displaying Selected MCA Modules" -->
<!-- id="AC791C82-5E1C-4B5A-93FD-9AABF26B59FA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="485AE527.4050101_at_penguincomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Displaying Selected MCA Modules<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-20 08:29:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5949.php">Jeff Squyres: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<li><strong>Previous message:</strong> <a href="5947.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>In reply to:</strong> <a href="5945.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5951.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5951.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Josh.
<br>
<p>No, we don't have an easy way to show which plugins were loaded and  
<br>
may/will be used during the run.  The modules you found below in -- 
<br>
display-map are only a few of the plugins (all dealing with the run- 
<br>
time environment, and only used on the back-end nodes, so it may not  
<br>
be what you're looking for -- e.g., it doesn't show the plugins used  
<br>
by mpirun).
<br>
<p>What do you need to know?
<br>
<p><p>On Jun 19, 2008, at 7:00 PM, Joshua Bernstein wrote:
<br>
<p><span class="quotelev1">&gt; Well to answer my own question,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	If I use the -display-map option, I get printed out a nice bit of  
</span><br>
<span class="quotelev1">&gt; information that includes a list of the modules in use during the  
</span><br>
<span class="quotelev1">&gt; run as shown below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---SNIP---
</span><br>
<span class="quotelev1">&gt;                Argv[0]: ./cpi
</span><br>
<span class="quotelev1">&gt;                Env[0]: OMPI_MCA_pls=proxy
</span><br>
<span class="quotelev1">&gt;                Env[1]: OMPI_MCA_rmaps_base_display_map=1
</span><br>
<span class="quotelev1">&gt;                Env[2]:  
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_precondition_transports 
</span><br>
<span class="quotelev1">&gt; =ad81e32181314110-4aea4dd5040c2593
</span><br>
<span class="quotelev1">&gt;                Env[3]: OMPI_MCA_rds=proxy
</span><br>
<span class="quotelev1">&gt;                Env[4]: OMPI_MCA_ras=proxy
</span><br>
<span class="quotelev1">&gt;                Env[5]: OMPI_MCA_rmaps=proxy
</span><br>
<span class="quotelev1">&gt;                Env[6]: OMPI_MCA_rmgr=proxy
</span><br>
<span class="quotelev1">&gt;                Working dir: /home/ats (user: 0)
</span><br>
<span class="quotelev1">&gt; ---END SNIP--
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Joshua Bernstein wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi There,
</span><br>
<span class="quotelev2">&gt;&gt;    I'm attempting to debug some configuration issue with the recent  
</span><br>
<span class="quotelev2">&gt;&gt; version of OMPI, version 1.2.6. I'm able to build all of the MCA  
</span><br>
<span class="quotelev2">&gt;&gt; modules, and I've figured out how to display the list of AVAILABLE  
</span><br>
<span class="quotelev2">&gt;&gt; modules using ompi_info, but is there a way to display the list of  
</span><br>
<span class="quotelev2">&gt;&gt; modules that was selected at runtime? I've tried the -v option to  
</span><br>
<span class="quotelev2">&gt;&gt; mpirun, and read through the FAQs, but I can't seem to figure out  
</span><br>
<span class="quotelev2">&gt;&gt; how to  have OMPI display the selected MCAs when a job starts. Any  
</span><br>
<span class="quotelev2">&gt;&gt; help or guidance would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; -Josh
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="5949.php">Jeff Squyres: "Re: [OMPI users] Fw: Re:  Open MPI timeout problems."</a>
<li><strong>Previous message:</strong> <a href="5947.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>In reply to:</strong> <a href="5945.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5951.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5951.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
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
