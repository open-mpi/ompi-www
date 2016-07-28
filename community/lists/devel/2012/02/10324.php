<?
$subject_val = "Re: [OMPI devel] RFC: Java MPI bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  7 15:31:08 2012" -->
<!-- isoreceived="20120207203108" -->
<!-- sent="Tue, 7 Feb 2012 13:31:00 -0700" -->
<!-- isosent="20120207203100" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Java MPI bindings" -->
<!-- id="F51FFECE-DDF2-43BB-97B1-FF741D92E23C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHwLALNKbPbdD7VKXoeUr+KhOWfMq6oeSPQ3KnQvodod=O=yBQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Java MPI bindings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-07 15:31:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10325.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10323.php">Rayson Ho: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10323.php">Rayson Ho: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
:-)
<br>
<p>I agree, and I don't sense anyone pushing the direction of distorting the current MPI behaviors. There are some good business reasons to want to use MPI in the analytics, and there are thoughts on how to work around the failure issues, but Hadoop clusters have some mechanisms available to them that aren't typically used on HPC clusters that may help. It will obviously be a bit of a work-in-progress for awhile, but the corporate investment rate is high and so hands will be available to address them.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Feb 7, 2012, at 1:25 PM, Rayson Ho wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not totally against the idea. As long as Hadoop is not taking
</span><br>
<span class="quotelev1">&gt; away the current task communication mechanism until MPI finally (there
</span><br>
<span class="quotelev1">&gt; are just too many papers on FT MPI, I remember reading checkpointing
</span><br>
<span class="quotelev1">&gt; MPI jobs more than 10 years ago!) has a standard way to handle node
</span><br>
<span class="quotelev1">&gt; failure, then I am not concerned at all!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler / Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scalable Grid Engine Support Program
</span><br>
<span class="quotelev1">&gt; <a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 7, 2012 at 3:14 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The community is aware of the issue. However, the corporations interested/involved in this area are not running on EC2 nor concerned about having allocations taken away. The question of failed nodes is something we plan to address over time, but is not considered an immediate show-stopper.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 7, 2012, at 1:05 PM, Rayson Ho wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Currently, Hadoop tasks (in a job) are independent of each. If Hadoop
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is going to use MPI for inter-task communication, then make sure they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; understand that the MPI standard currently does not address fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; folerant.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that it is not uncommon to run map reduce jobs on Amazon EC2's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spot instances, which can be taken back by Amazon at any time if the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spot price rises above the bid price of the user. If Hadoop is going
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to use MPI, and without a fault folerant MPI implementation, then the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whole job needs to be rerun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.youtube.com/watch?v=66rfnFA0jpM">http://www.youtube.com/watch?v=66rfnFA0jpM</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rayson
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open Grid Scheduler / Grid Engine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scalable Grid Engine Support Program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Feb 1, 2012 at 3:20 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FROM: LANL, HLRS, Cisco, Oracle, and IBM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHAT: Adds Java bindings
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHY: The Hadoop community would like to use MPI in their efforts, and most of their code is in Java
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHERE: ompi/mpi/java plus one new config file in ompi/config
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TIMEOUT: Feb 10, 2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hadoop is a Java-based environment for processing extremely large data sets. Modeled on the Google enterprise system, it has evolved into its own open-source community. Currently, they use their own IPC for messaging, but acknowledge that it is nowhere near as efficient or well-developed as found in MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While 3rd party Java bindings are available, the Hadoop business world is leery of depending on something that &quot;bolts on&quot; - they would be more willing to adopt the technology if it were included in a &quot;standard&quot; distribution. Hence, they have requested that Open MPI provide that capability, and in exchange will help champion broader adoption of Java support within the MPI community.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We have based the OMPI bindings on the mpiJava code originally developed at IU, and currently maintained by HLRS. Adding the bindings to OMPI is completely transparent to all other OMPI users and has zero performance impact on the rest of the code/bindings. We have setup the configure so that the Java bindings will build if/when they can or are explicitly requested, just as with other language support.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As the Hadoop community represents a rapidly-growing new set of customers and needs, we feel that adding these bindings is appropriate. The bindings will be maintained by those organizations that have an interest in this use-case.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rayson
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10325.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10323.php">Rayson Ho: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10323.php">Rayson Ho: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
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
