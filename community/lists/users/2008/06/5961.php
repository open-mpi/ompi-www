<?
$subject_val = "Re: [OMPI users] Displaying Selected MCA Modules";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 21 14:57:17 2008" -->
<!-- isoreceived="20080621185717" -->
<!-- sent="Sat, 21 Jun 2008 12:56:59 -0600" -->
<!-- isosent="20080621185659" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Displaying Selected MCA Modules" -->
<!-- id="C482AB1B.5507%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-21 14:56:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5962.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5960.php">Jeff Squyres: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<li><strong>In reply to:</strong> <a href="5945.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....this email thread was forwarded to me by a friendly elf, so be sure
<br>
to include me directly in any reply. As the person who wrote a lot of the
<br>
bproc support, I'll try to catch up on it over the next couple of days.
<br>
<p>One thing to correct right away, though. The --display-map function actually
<br>
doesn't tell you what modules are going to be used to run the job. The
<br>
values you show below are the MCA params being passed to the application
<br>
procs, which have nothing to do with how those procs are being launched!
<br>
<p>In fact, in 1.2, we hard-code the &quot;proxy&quot; components solely to turn &quot;off&quot;
<br>
any attempt by a local proc to mistakenly choose a &quot;real&quot; component for
<br>
those frameworks. The &quot;proxy&quot; just tells them to send a message to mpirun if
<br>
they actually need to use any of those frameworks.
<br>
<p>In a bproc world, NONE of those frameworks are used by the procs, and the
<br>
procs never call any of them.
<br>
<p>I'm not sure that 1.2 provides a mechanism for reliably reporting what every
<br>
framework selected.
<br>
<p>Ralph
<br>
<p><p>On 6/19/08 5:00 PM, &quot;Joshua Bernstein&quot; &lt;jbernstein_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Well to answer my own question,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I use the -display-map option, I get printed out a nice bit of
</span><br>
<span class="quotelev1">&gt; information that includes a list of the modules in use during the run
</span><br>
<span class="quotelev1">&gt; as shown below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---SNIP---
</span><br>
<span class="quotelev1">&gt;                 Argv[0]: ./cpi
</span><br>
<span class="quotelev1">&gt;                 Env[0]: OMPI_MCA_pls=proxy
</span><br>
<span class="quotelev1">&gt;                 Env[1]: OMPI_MCA_rmaps_base_display_map=1
</span><br>
<span class="quotelev1">&gt;                 Env[2]:
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_precondition_transports=ad81e32181314110-4aea4dd5040c2593
</span><br>
<span class="quotelev1">&gt;                 Env[3]: OMPI_MCA_rds=proxy
</span><br>
<span class="quotelev1">&gt;                 Env[4]: OMPI_MCA_ras=proxy
</span><br>
<span class="quotelev1">&gt;                 Env[5]: OMPI_MCA_rmaps=proxy
</span><br>
<span class="quotelev1">&gt;                 Env[6]: OMPI_MCA_rmgr=proxy
</span><br>
<span class="quotelev1">&gt;                 Working dir: /home/ats (user: 0)
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5962.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5960.php">Jeff Squyres: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<li><strong>In reply to:</strong> <a href="5945.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
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
