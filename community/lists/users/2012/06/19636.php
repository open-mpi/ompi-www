<?
$subject_val = "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users] 2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 20 09:37:57 2012" -->
<!-- isoreceived="20120620133757" -->
<!-- sent="Wed, 20 Jun 2012 09:37:52 -0400" -->
<!-- isosent="20120620133752" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI users] Re: [OMPI users] &amp;#187;&amp;#216;&amp;#184;&amp;#180;: Re: [OMPI users] 2012/06/18 14:35:07 &amp;#215;&amp;#212;&amp;#182;&amp;#175;&amp;#177;&amp;#163;&amp;#180;&amp;#230;&amp;#178;&amp;#221;&amp;#184;&amp;#229;" -->
<!-- id="CAANzjEmdcp+Tr56tLOC_s-ri1fP6OS5Ph7VN=7ovKrbB9fZaGg_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="849dbad93c54bad775ff5fcd3bc7e2f5_at_nscc-tj.gov.cn" -->
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
<strong>Subject:</strong> [OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users] 2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-20 09:37:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19637.php">Josh Hursey: "Re: [OMPI users] checkpointing of NPB"</a>
<li><strong>Previous message:</strong> <a href="19635.php">&#179;&#194;&#203;&#201;: "[OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users]  2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;"</a>
<li><strong>In reply to:</strong> <a href="19635.php">&#179;&#194;&#203;&#201;: "[OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users]  2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are correct that the Open MPI project combined the efforts of a
<br>
few preexisting MPI implementations towards building a single,
<br>
extensible MPI implementation with the best features of the prior MPI
<br>
implementations. From the beginning of the project the Open MPI
<br>
developer community has desired to provide a solid MPI 2 (soon MPI 3)
<br>
compliant MPI implementation. Features outside of the MPI standard,
<br>
such as fault tolerance, have been (and are) goals as well.
<br>
<p>The fault tolerance efforts in Open MPI have been mostly pursued by
<br>
the research side of the community. As such, maintenance support for
<br>
these features is often challenging and a point of frequent discussion
<br>
in the core developer community. There are users for each of these
<br>
fault tolerance features/techniques, so they are important to provide.
<br>
Integrating these features into Open MPI without diminishing
<br>
performance, scalability, and usability is often a delicate software
<br>
engineering challenge. Per the prior comments on this thread, it can
<br>
often lead to heated debate. :)
<br>
<p><p>In the Open MPI trunk and 1.6 release series there are a few fault
<br>
tolerance features that you might be interested in, all with various
<br>
degrees of functionality and support. Each of these features are
<br>
advancements on the fault tolerance features from the LAM/MPI,
<br>
MPICH-V, FT-MPI, and LA-MPI projects.
<br>
<p>Checkpoint/Restart support allows a user to manually (via a command
<br>
line tool) checkpoint and restart an MPI application, migrate
<br>
processes in the machine, and/or ask Open MPI to automatically restart
<br>
failed processes on spare resources. Additionally, the application can
<br>
use APIs to checkpoint/restart/migrate processes without using the
<br>
command line tools. This C/R technique is similar to the feature
<br>
provided by LAM/MPI, and was developed by Indiana University (for my
<br>
PhD work). For more details see the link below:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=ft#cr-support">http://www.open-mpi.org/faq/?category=ft#cr-support</a>
<br>
<p>Message logging support was added a while back by UTK, but I am
<br>
uncertain about its current state. This technique is similar to the
<br>
features provided by the MPICH-V project. For more details, I think
<br>
the wiki page below describes the functionality:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/EventLog_CR">https://svn.open-mpi.org/trac/ompi/wiki/EventLog_CR</a>
<br>
<p>The MPI Forum standardization body's Fault Tolerance Working Group has
<br>
a proposal for application managed fault tolerance. In essence this is
<br>
similar to the FT-MPI work, although the interface is quite a bit
<br>
different. This feature is not yet in the Open MPI trunk, but you can
<br>
find a beta release and more information at the link below:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/~jjhursey/projects/ft-open-mpi/">http://www.open-mpi.org/~jjhursey/projects/ft-open-mpi/</a>
<br>
<p>End-to-end data reliability worked at one point in time, but I do not
<br>
know if it is being maintained. This is similar to the fault tolerance
<br>
features found in LA-MPI. For information about that project see the
<br>
link below:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=ft#dr-support">http://www.open-mpi.org/faq/?category=ft#dr-support</a>
<br>
<p>There are also research projects that are exploring other fault
<br>
tolerance techniques above MPI, such as peer based checkpointing and
<br>
replication. So far, these projects have tried to stay above the MPI
<br>
layer for portability, and have not requested any specific extensions
<br>
of Open MPI (maybe with the exception of the work in the MPI Forum,
<br>
cited above). Below are links to two such projects, though there are
<br>
many others out there:
<br>
&nbsp;&nbsp;<a href="http://sourceforge.net/projects/scalablecr/">http://sourceforge.net/projects/scalablecr/</a>
<br>
&nbsp;&nbsp;<a href="http://prod.sandia.gov/techlib/access-control.cgi/2011/112488.pdf">http://prod.sandia.gov/techlib/access-control.cgi/2011/112488.pdf</a>
<br>
<p><p>So that should give you an overview of the current state of fault
<br>
tolerance techniques in Open MPI. To your question about what you can
<br>
expect if a process crashes in your Open MPI job. By default, Open MPI
<br>
will kill your entire MPI job and the user will have to restart the
<br>
job from either the beginning of execution or from any checkpoint
<br>
files that the application has written. Open MPI defaults to killing
<br>
the entire MPI job since that is what is often expected by MPI
<br>
applications, as most use the default MPI error handler
<br>
MPI_ERRORS_ARE_FATAL:
<br>
&nbsp;&nbsp;<a href="http://www.netlib.org/utk/papers/mpi-book/node177.html">http://www.netlib.org/utk/papers/mpi-book/node177.html</a>
<br>
<p>Last I checked, the current Open MPI trunk will terminate the entire
<br>
job even if the user set MPI_ERRORS_RETURN on their communicators. A
<br>
reason for this is that the behavior of MPI after returning such an
<br>
error is undefined. The MPI Forum Fault Tolerance working group is
<br>
working to define this behavior. So if this is of interest see the MPI
<br>
Forum work cited above.
<br>
<p>If you want a fault tolerance feature, such as automatic
<br>
checkpoint/restart recovery, you will need to create a build of Open
<br>
MPI with that feature enabled. There are instructions on the various
<br>
links above about how to do so.
<br>
<p><p>If you are particularly interested in one feature or have a strong use
<br>
case for a set of features, then that is important information for the
<br>
Open MPI developer community. This will help use as a project
<br>
prioritize the maintenance of various features in the Open MPI
<br>
project.
<br>
<p><p>Best of luck,
<br>
Josh
<br>
<p>On Wed, Jun 20, 2012 at 2:59 AM, &#179;&#194;&#203;&#201; &lt;chensong_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; As far as I know, OMPI combines the fault tolerant features in FT-MPI,
</span><br>
<span class="quotelev1">&gt; LA-MPI and LAM/MPI, is this statement still correct now? Or as you say, OMPI
</span><br>
<span class="quotelev1">&gt; supports checkpoint/restart(like in LAM/MPI) only? I don't know the details
</span><br>
<span class="quotelev1">&gt; of FT-MPI or LA-MPI, aren't they useful or necesarry?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In fact, what I really want to know is, suppose I run a job on N processors
</span><br>
<span class="quotelev1">&gt; with OMPI, and one (or some) of these processors crashes, then what would be
</span><br>
<span class="quotelev1">&gt; done by the fault-tolerant mechanism of OMPI? Meanwhile what should the
</span><br>
<span class="quotelev1">&gt; sys-admin do(like restart the crashed node) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my understanding, after the crash, the sys-admin should restart the
</span><br>
<span class="quotelev1">&gt; crashed node(if it can be restarted), and then do the rollback by some sort
</span><br>
<span class="quotelev1">&gt; of command, while the OMPI would help hang up all the computing process,
</span><br>
<span class="quotelev1">&gt; waiting for rollback command, is this correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------- &#212;&#173;&#202;&#188;&#211;&#202;&#188;&#254;&#208;&#197;&#207;&#162; ---------
</span><br>
<span class="quotelev1">&gt; &#183;&#162;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#202;&#213;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#214;&#247;&#204;&#226;: Re: [OMPI users] 2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;
</span><br>
<span class="quotelev1">&gt; &#200;&#213;&#198;&#218;: 2012/06/20 01:26:08, Wednesday
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's a little bit strong - OMPI still supports checkpoint/restart as a
</span><br>
<span class="quotelev1">&gt; fault tolerance mechanism. There really isn't anything the sys admin has to
</span><br>
<span class="quotelev1">&gt; do, though - what is required is that users periodically order their
</span><br>
<span class="quotelev1">&gt; programs to checkpoint so they can be restarted after a failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Checkpointing is typically done either by the app itself (say, when it
</span><br>
<span class="quotelev1">&gt; reaches some point it feels is a good one to save), or using a script that
</span><br>
<span class="quotelev1">&gt; just orders a checkpoint every so many seconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What we have said is that we don't believe the FT &quot;run thru failure&quot;
</span><br>
<span class="quotelev1">&gt; position pushed by UTK is particularly required at this time. Partly a
</span><br>
<span class="quotelev1">&gt; question of impact vs benefit, mostly due to competing approaches offering
</span><br>
<span class="quotelev1">&gt; equivalent fault recovery capability with less impact. But that's a separate
</span><br>
<span class="quotelev1">&gt; discussion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2012, at 11:16 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It has been clearly stated that the official position pushed forward by a
</span><br>
<span class="quotelev1">&gt; majority of the Open MPI developer community is that fault tolerance is not
</span><br>
<span class="quotelev1">&gt; needed so we (read this as the official version of Open MPI) do not support
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, a group of researchers have been working toward a version of Open
</span><br>
<span class="quotelev1">&gt; MPI that supports the last fault tolerance proposal submitted for
</span><br>
<span class="quotelev1">&gt; consideration to the MPI Forum. You can access it
</span><br>
<span class="quotelev1">&gt; at <a href="https://bitbucket.org/jjhursey/ompi-ulfm-rts">https://bitbucket.org/jjhursey/ompi-ulfm-rts</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2012, at 09:58 , &#179;&#194;&#203;&#201; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone explain me the fault tolerant features in OpenMPI? I've read the
</span><br>
<span class="quotelev1">&gt; FAQs and some papers about this topic listed in open-mpi.org, but still
</span><br>
<span class="quotelev1">&gt; can't figure out when one node of my supercomputer system fails down during
</span><br>
<span class="quotelev1">&gt; computing, what would happen with the fault tolerant mechanism in OpenMPI,
</span><br>
<span class="quotelev1">&gt; and what should we system administrator do after the failure (or before).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone help me? My boss want me to deploy OpenMPI in our system cuz he
</span><br>
<span class="quotelev1">&gt; want the fault tolerant feature.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; CHEN Song
</span><br>
<span class="quotelev1">&gt; R&amp;D Department
</span><br>
<span class="quotelev1">&gt; National Supercomputer Center in Tianjin
</span><br>
<span class="quotelev1">&gt; Binhai New Area, Tianjin, China
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19637.php">Josh Hursey: "Re: [OMPI users] checkpointing of NPB"</a>
<li><strong>Previous message:</strong> <a href="19635.php">&#179;&#194;&#203;&#201;: "[OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users]  2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;"</a>
<li><strong>In reply to:</strong> <a href="19635.php">&#179;&#194;&#203;&#201;: "[OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users]  2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;"</a>
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
