<?
$subject_val = "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 08:42:05 2012" -->
<!-- isoreceived="20120625124205" -->
<!-- sent="Mon, 25 Jun 2012 08:42:00 -0400" -->
<!-- isosent="20120625124200" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI users] Re: [OMPI users] &amp;#187;&amp;#216;&amp;#184;&amp;#180;: [OMPI users] Fault Tolerant Features in OpenMPI" -->
<!-- id="CAANzjEmOhcrTuqEVX6TGH123VBYBtvQW4sk2u7y3X613OwAgwQ_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="343bac06ea635a0b91f4b16808372be0_at_nscc-tj.gov.cn" -->
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
<strong>Subject:</strong> [OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-25 08:42:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19659.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19657.php">&#179;&#194;&#203;&#201;: "[OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="19657.php">&#179;&#194;&#203;&#201;: "[OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The official support page for the C/R features is hosted by Indiana
<br>
University (linked from the Open MPI FAQs):
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/">http://osl.iu.edu/research/ft/ompi-cr/</a>
<br>
<p>The instructions probably need to be cleaned up (some of the release
<br>
references are not quite correct any longer). But the following should
<br>
give you a build of Open MPI with C/R support:
<br>
&nbsp;shell$ ./configure --with-ft=cr --with-ft=cr --enable-opal-multi-threads
<br>
<p>You will also need to enable it on the command line with mpirun:
<br>
&nbsp;shell$ mpirun -am ft-enable-cr my-app
<br>
<p>Best,
<br>
Josh
<br>
<p>On Mon, Jun 25, 2012 at 6:21 AM, &#179;&#194;&#203;&#201; &lt;chensong_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; THANK YOU for your detailed answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [quote]If you want a fault tolerance feature, such as automatic
</span><br>
<span class="quotelev1">&gt; checkpoint/restart recovery, you will need to create a build of Open
</span><br>
<span class="quotelev1">&gt; MPI with that feature enabled. There are instructions on the various
</span><br>
<span class="quotelev1">&gt; links above about how to do so.[/quote]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you give me some kind of official guide to enable the C/R feature? I
</span><br>
<span class="quotelev1">&gt; googled some aritcles but there seems problems with those methods.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best wishes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------- &#212;&#173;&#202;&#188;&#211;&#202;&#188;&#254;&#208;&#197;&#207;&#162; ---------
</span><br>
<span class="quotelev1">&gt; &#183;&#162;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#202;&#213;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#214;&#247;&#204;&#226;: [OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users] 2012/06/18 14:35:07
</span><br>
<span class="quotelev1">&gt; &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;
</span><br>
<span class="quotelev1">&gt; &#200;&#213;&#198;&#218;: 2012/06/20 21:43:27, Wednesday
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are correct that the Open MPI project combined the efforts of a
</span><br>
<span class="quotelev1">&gt; few preexisting MPI implementations towards building a single,
</span><br>
<span class="quotelev1">&gt; extensible MPI implementation with the best features of the prior MPI
</span><br>
<span class="quotelev1">&gt; implementations. From the beginning of the project the Open MPI
</span><br>
<span class="quotelev1">&gt; developer community has desired to provide a solid MPI 2 (soon MPI 3)
</span><br>
<span class="quotelev1">&gt; compliant MPI implementation. Features outside of the MPI standard,
</span><br>
<span class="quotelev1">&gt; such as fault tolerance, have been (and are) goals as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fault tolerance efforts in Open MPI have been mostly pursued by
</span><br>
<span class="quotelev1">&gt; the research side of the community. As such, maintenance support for
</span><br>
<span class="quotelev1">&gt; these features is often challenging and a point of frequent discussion
</span><br>
<span class="quotelev1">&gt; in the core developer community. There are users for each of these
</span><br>
<span class="quotelev1">&gt; fault tolerance features/techniques, so they are important to provide.
</span><br>
<span class="quotelev1">&gt; Integrating these features into Open MPI without diminishing
</span><br>
<span class="quotelev1">&gt; performance, scalability, and usability is often a delicate software
</span><br>
<span class="quotelev1">&gt; engineering challenge. Per the prior comments on this thread, it can
</span><br>
<span class="quotelev1">&gt; often lead to heated debate. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the Open MPI trunk and 1.6 release series there are a few fault
</span><br>
<span class="quotelev1">&gt; tolerance features that you might be interested in, all with various
</span><br>
<span class="quotelev1">&gt; degrees of functionality and support. Each of these features are
</span><br>
<span class="quotelev1">&gt; advancements on the fault tolerance features from the LAM/MPI,
</span><br>
<span class="quotelev1">&gt; MPICH-V, FT-MPI, and LA-MPI projects.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Checkpoint/Restart support allows a user to manually (via a command
</span><br>
<span class="quotelev1">&gt; line tool) checkpoint and restart an MPI application, migrate
</span><br>
<span class="quotelev1">&gt; processes in the machine, and/or ask Open MPI to automatically restart
</span><br>
<span class="quotelev1">&gt; failed processes on spare resources. Additionally, the application can
</span><br>
<span class="quotelev1">&gt; use APIs to checkpoint/restart/migrate processes without using the
</span><br>
<span class="quotelev1">&gt; command line tools. This C/R technique is similar to the feature
</span><br>
<span class="quotelev1">&gt; provided by LAM/MPI, and was developed by Indiana University (for my
</span><br>
<span class="quotelev1">&gt; PhD work). For more details see the link below:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=ft#cr-support">http://www.open-mpi.org/faq/?category=ft#cr-support</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message logging support was added a while back by UTK, but I am
</span><br>
<span class="quotelev1">&gt; uncertain about its current state. This technique is similar to the
</span><br>
<span class="quotelev1">&gt; features provided by the MPICH-V project. For more details, I think
</span><br>
<span class="quotelev1">&gt; the wiki page below describes the functionality:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/EventLog_CR">https://svn.open-mpi.org/trac/ompi/wiki/EventLog_CR</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI Forum standardization body's Fault Tolerance Working Group has
</span><br>
<span class="quotelev1">&gt; a proposal for application managed fault tolerance. In essence this is
</span><br>
<span class="quotelev1">&gt; similar to the FT-MPI work, although the interface is quite a bit
</span><br>
<span class="quotelev1">&gt; different. This feature is not yet in the Open MPI trunk, but you can
</span><br>
<span class="quotelev1">&gt; find a beta release and more information at the link below:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/~jjhursey/projects/ft-open-mpi/">http://www.open-mpi.org/~jjhursey/projects/ft-open-mpi/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End-to-end data reliability worked at one point in time, but I do not
</span><br>
<span class="quotelev1">&gt; know if it is being maintained. This is similar to the fault tolerance
</span><br>
<span class="quotelev1">&gt; features found in LA-MPI. For information about that project see the
</span><br>
<span class="quotelev1">&gt; link below:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=ft#dr-support">http://www.open-mpi.org/faq/?category=ft#dr-support</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are also research projects that are exploring other fault
</span><br>
<span class="quotelev1">&gt; tolerance techniques above MPI, such as peer based checkpointing and
</span><br>
<span class="quotelev1">&gt; replication. So far, these projects have tried to stay above the MPI
</span><br>
<span class="quotelev1">&gt; layer for portability, and have not requested any specific extensions
</span><br>
<span class="quotelev1">&gt; of Open MPI (maybe with the exception of the work in the MPI Forum,
</span><br>
<span class="quotelev1">&gt; cited above). Below are links to two such projects, though there are
</span><br>
<span class="quotelev1">&gt; many others out there:
</span><br>
<span class="quotelev1">&gt; <a href="http://sourceforge.net/projects/scalablecr/">http://sourceforge.net/projects/scalablecr/</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://prod.sandia.gov/techlib/access-control.cgi/2011/112488.pdf">http://prod.sandia.gov/techlib/access-control.cgi/2011/112488.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So that should give you an overview of the current state of fault
</span><br>
<span class="quotelev1">&gt; tolerance techniques in Open MPI. To your question about what you can
</span><br>
<span class="quotelev1">&gt; expect if a process crashes in your Open MPI job. By default, Open MPI
</span><br>
<span class="quotelev1">&gt; will kill your entire MPI job and the user will have to restart the
</span><br>
<span class="quotelev1">&gt; job from either the beginning of execution or from any checkpoint
</span><br>
<span class="quotelev1">&gt; files that the application has written. Open MPI defaults to killing
</span><br>
<span class="quotelev1">&gt; the entire MPI job since that is what is often expected by MPI
</span><br>
<span class="quotelev1">&gt; applications, as most use the default MPI error handler
</span><br>
<span class="quotelev1">&gt; MPI_ERRORS_ARE_FATAL:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.netlib.org/utk/papers/mpi-book/node177.html">http://www.netlib.org/utk/papers/mpi-book/node177.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Last I checked, the current Open MPI trunk will terminate the entire
</span><br>
<span class="quotelev1">&gt; job even if the user set MPI_ERRORS_RETURN on their communicators. A
</span><br>
<span class="quotelev1">&gt; reason for this is that the behavior of MPI after returning such an
</span><br>
<span class="quotelev1">&gt; error is undefined. The MPI Forum Fault Tolerance working group is
</span><br>
<span class="quotelev1">&gt; working to define this behavior. So if this is of interest see the MPI
</span><br>
<span class="quotelev1">&gt; Forum work cited above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want a fault tolerance feature, such as automatic
</span><br>
<span class="quotelev1">&gt; checkpoint/restart recovery, you will need to create a build of Open
</span><br>
<span class="quotelev1">&gt; MPI with that feature enabled. There are instructions on the various
</span><br>
<span class="quotelev1">&gt; links above about how to do so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are particularly interested in one feature or have a strong use
</span><br>
<span class="quotelev1">&gt; case for a set of features, then that is important information for the
</span><br>
<span class="quotelev1">&gt; Open MPI developer community. This will help use as a project
</span><br>
<span class="quotelev1">&gt; prioritize the maintenance of various features in the Open MPI
</span><br>
<span class="quotelev1">&gt; project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best of luck,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 20, 2012 at 2:59 AM, &#179;&#194;&#203;&#201; &lt;chensong_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; As far as I know, OMPI combines the fault tolerant features in FT-MPI,
</span><br>
<span class="quotelev2">&gt;&gt; LA-MPI and LAM/MPI, is this statement still correct now? Or as you say,
</span><br>
<span class="quotelev2">&gt;&gt; OMPI
</span><br>
<span class="quotelev2">&gt;&gt; supports checkpoint/restart(like in LAM/MPI) only? I don't know the
</span><br>
<span class="quotelev2">&gt;&gt; details
</span><br>
<span class="quotelev2">&gt;&gt; of FT-MPI or LA-MPI, aren't they useful or necesarry?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In fact, what I really want to know is, suppose I run a job on N
</span><br>
<span class="quotelev2">&gt;&gt; processors
</span><br>
<span class="quotelev2">&gt;&gt; with OMPI, and one (or some) of these processors crashes, then what would
</span><br>
<span class="quotelev2">&gt;&gt; be
</span><br>
<span class="quotelev2">&gt;&gt; done by the fault-tolerant mechanism of OMPI? Meanwhile what should the
</span><br>
<span class="quotelev2">&gt;&gt; sys-admin do(like restart the crashed node) ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my understanding, after the crash, the sys-admin should restart the
</span><br>
<span class="quotelev2">&gt;&gt; crashed node(if it can be restarted), and then do the rollback by some
</span><br>
<span class="quotelev2">&gt;&gt; sort
</span><br>
<span class="quotelev2">&gt;&gt; of command, while the OMPI would help hang up all the computing process,
</span><br>
<span class="quotelev2">&gt;&gt; waiting for rollback command, is this correct?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------- &#212;&#173;&#202;&#188;&#211;&#202;&#188;&#254;&#208;&#197;&#207;&#162; ---------
</span><br>
<span class="quotelev2">&gt;&gt; &#183;&#162;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#202;&#213;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#214;&#247;&#204;&#226;: Re: [OMPI users] 2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;
</span><br>
<span class="quotelev2">&gt;&gt; &#200;&#213;&#198;&#218;: 2012/06/20 01:26:08, Wednesday
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's a little bit strong - OMPI still supports checkpoint/restart as a
</span><br>
<span class="quotelev2">&gt;&gt; fault tolerance mechanism. There really isn't anything the sys admin has
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; do, though - what is required is that users periodically order their
</span><br>
<span class="quotelev2">&gt;&gt; programs to checkpoint so they can be restarted after a failure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Checkpointing is typically done either by the app itself (say, when it
</span><br>
<span class="quotelev2">&gt;&gt; reaches some point it feels is a good one to save), or using a script that
</span><br>
<span class="quotelev2">&gt;&gt; just orders a checkpoint every so many seconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What we have said is that we don't believe the FT &quot;run thru failure&quot;
</span><br>
<span class="quotelev2">&gt;&gt; position pushed by UTK is particularly required at this time. Partly a
</span><br>
<span class="quotelev2">&gt;&gt; question of impact vs benefit, mostly due to competing approaches offering
</span><br>
<span class="quotelev2">&gt;&gt; equivalent fault recovery capability with less impact. But that's a
</span><br>
<span class="quotelev2">&gt;&gt; separate
</span><br>
<span class="quotelev2">&gt;&gt; discussion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 19, 2012, at 11:16 AM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It has been clearly stated that the official position pushed forward by a
</span><br>
<span class="quotelev2">&gt;&gt; majority of the Open MPI developer community is that fault tolerance is
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev2">&gt;&gt; needed so we (read this as the official version of Open MPI) do not
</span><br>
<span class="quotelev2">&gt;&gt; support
</span><br>
<span class="quotelev2">&gt;&gt; it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, a group of researchers have been working toward a version of Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI that supports the last fault tolerance proposal submitted for
</span><br>
<span class="quotelev2">&gt;&gt; consideration to the MPI Forum. You can access it
</span><br>
<span class="quotelev2">&gt;&gt; at <a href="https://bitbucket.org/jjhursey/ompi-ulfm-rts">https://bitbucket.org/jjhursey/ompi-ulfm-rts</a>.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 19, 2012, at 09:58 , &#179;&#194;&#203;&#201; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone explain me the fault tolerant features in OpenMPI? I've read
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; FAQs and some papers about this topic listed in open-mpi.org, but still
</span><br>
<span class="quotelev2">&gt;&gt; can't figure out when one node of my supercomputer system fails down
</span><br>
<span class="quotelev2">&gt;&gt; during
</span><br>
<span class="quotelev2">&gt;&gt; computing, what would happen with the fault tolerant mechanism in OpenMPI,
</span><br>
<span class="quotelev2">&gt;&gt; and what should we system administrator do after the failure (or before).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone help me? My boss want me to deploy OpenMPI in our system cuz he
</span><br>
<span class="quotelev2">&gt;&gt; want the fault tolerant feature.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------
</span><br>
<span class="quotelev2">&gt;&gt; CHEN Song
</span><br>
<span class="quotelev2">&gt;&gt; R&amp;D Department
</span><br>
<span class="quotelev2">&gt;&gt; National Supercomputer Center in Tianjin
</span><br>
<span class="quotelev2">&gt;&gt; Binhai New Area, Tianjin, China
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="19659.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19657.php">&#179;&#194;&#203;&#201;: "[OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="19657.php">&#179;&#194;&#203;&#201;: "[OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
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
