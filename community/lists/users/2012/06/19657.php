<?
$subject_val = "[OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 06:22:02 2012" -->
<!-- isoreceived="20120625102202" -->
<!-- sent="Mon, 25 Jun 2012 18:21:45 +0800" -->
<!-- isosent="20120625102145" -->
<!-- name="&#179;&#194;&#203;&#201;" -->
<!-- email="chensong_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;#187;&amp;#216;&amp;#184;&amp;#180;: [OMPI users] Fault Tolerant Features in OpenMPI" -->
<!-- id="343bac06ea635a0b91f4b16808372be0_at_nscc-tj.gov.cn" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI<br>
<strong>From:</strong> &#179;&#194;&#203;&#201; (<em>chensong_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-25 06:21:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19658.php">Josh Hursey: "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="19656.php">Shiqing Fan: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19658.php">Josh Hursey: "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="19658.php">Josh Hursey: "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
THANK YOU for your detailed answer.[quote]If you want a fault tolerance feature, such as automaticcheckpoint/restart recovery, you will need to create a build of OpenMPI with that feature enabled. There are instructions on the variouslinks above about how to do so.[/quote]Could you give me some kind of official guide to enable the C/R feature? I googled some aritcles but there seems problems with those methods.Best wishes.--------- &#212;&#173;&#202;&#188;&#211;&#202;&#188;&#254;&#208;&#197;&#207;&#162; ---------&#183;&#162;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot; &amp;lt;users_at_[hidden]&amp;gt;&#202;&#213;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot; &amp;lt;users_at_[hidden]&amp;gt;&#214;&#247;&#204;&#226;: [OMPI users] 	Re: [OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users] 2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;&#200;&#213;&#198;&#218;: 2012/06/20 21:43:27, WednesdayYou are correct that the Open MPI project combined the efforts of a
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
<p>On Wed, Jun 20, 2012 at 2:59 AM, &#179;&#194;&#203;&#201; &amp;lt;chensong_at_[hidden]&amp;gt; wrote:
<br>
&amp;gt; As far as I know, OMPI combines the fault tolerant features in FT-MPI,
<br>
&amp;gt; LA-MPI and LAM/MPI, is this statement still correct now? Or as you say, OMPI
<br>
&amp;gt; supports checkpoint/restart(like in LAM/MPI) only? I don't know the details
<br>
&amp;gt; of FT-MPI or LA-MPI, aren't they useful or necesarry?
<br>
&amp;gt;
<br>
&amp;gt; In fact, what I really want to know is, suppose I run a job on N processors
<br>
&amp;gt; with OMPI, and one (or some) of these processors crashes, then what would be
<br>
&amp;gt; done by the fault-tolerant mechanism of OMPI? Meanwhile what should the
<br>
&amp;gt; sys-admin do(like restart the crashed node) ?
<br>
&amp;gt;
<br>
&amp;gt; In my understanding, after the crash, the sys-admin should restart the
<br>
&amp;gt; crashed node(if it can be restarted), and then do the rollback by some sort
<br>
&amp;gt; of command, while the OMPI would help hang up all the computing process,
<br>
&amp;gt; waiting for rollback command, is this correct?
<br>
&amp;gt;
<br>
&amp;gt; thanks again.
<br>
&amp;gt;
<br>
&amp;gt;
<br>
&amp;gt;
<br>
&amp;gt; --------- &#212;&#173;&#202;&#188;&#211;&#202;&#188;&#254;&#208;&#197;&#207;&#162; ---------
<br>
&amp;gt; &#183;&#162;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot; &amp;lt;users_at_[hidden]&amp;gt;
<br>
&amp;gt; &#202;&#213;&#188;&#254;&#200;&#203;: &quot;Open MPI Users&quot; &amp;lt;users_at_[hidden]&amp;gt;
<br>
&amp;gt; &#214;&#247;&#204;&#226;: Re: [OMPI users] 2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;
<br>
&amp;gt; &#200;&#213;&#198;&#218;: 2012/06/20 01:26:08, Wednesday
<br>
&amp;gt;
<br>
&amp;gt;
<br>
&amp;gt; That's a little bit strong - OMPI still supports checkpoint/restart as a
<br>
&amp;gt; fault tolerance mechanism. There really isn't anything the sys admin has to
<br>
&amp;gt; do, though - what is required is that users periodically order their
<br>
&amp;gt; programs to checkpoint so they can be restarted after a failure.
<br>
&amp;gt;
<br>
&amp;gt; Checkpointing is typically done either by the app itself (say, when it
<br>
&amp;gt; reaches some point it feels is a good one to save), or using a script that
<br>
&amp;gt; just orders a checkpoint every so many seconds.
<br>
&amp;gt;
<br>
&amp;gt; What we have said is that we don't believe the FT &quot;run thru failure&quot;
<br>
&amp;gt; position pushed by UTK is particularly required at this time. Partly a
<br>
&amp;gt; question of impact vs benefit, mostly due to competing approaches offering
<br>
&amp;gt; equivalent fault recovery capability with less impact. But that's a separate
<br>
&amp;gt; discussion.
<br>
&amp;gt;
<br>
&amp;gt;
<br>
&amp;gt; On Jun 19, 2012, at 11:16 AM, George Bosilca wrote:
<br>
&amp;gt;
<br>
&amp;gt; It has been clearly stated that the official position pushed forward by a
<br>
&amp;gt; majority of the Open MPI developer community is that fault tolerance is not
<br>
&amp;gt; needed so we (read this as the official version of Open MPI) do not support
<br>
&amp;gt; it.
<br>
&amp;gt;
<br>
&amp;gt; However, a group of researchers have been working toward a version of Open
<br>
&amp;gt; MPI that supports the last fault tolerance proposal submitted for
<br>
&amp;gt; consideration to the MPI Forum. You can access it
<br>
&amp;gt; at <a href="https://bitbucket.org/jjhursey/ompi-ulfm-rts">https://bitbucket.org/jjhursey/ompi-ulfm-rts</a>.
<br>
&amp;gt;
<br>
&amp;gt;   george.
<br>
&amp;gt;
<br>
&amp;gt; On Jun 19, 2012, at 09:58 , &#179;&#194;&#203;&#201; wrote:
<br>
&amp;gt;
<br>
&amp;gt; Hi all,
<br>
&amp;gt;
<br>
&amp;gt; Can anyone explain me the fault tolerant features in OpenMPI? I've read the
<br>
&amp;gt; FAQs and some papers about this topic listed in open-mpi.org, but still
<br>
&amp;gt; can't figure out when one node of my supercomputer system fails down during
<br>
&amp;gt; computing, what would happen with the fault tolerant mechanism in OpenMPI,
<br>
&amp;gt; and what should we system administrator do after the failure (or before).
<br>
&amp;gt;
<br>
&amp;gt; Can anyone help me? My boss want me to deploy OpenMPI in our system cuz he
<br>
&amp;gt; want the fault tolerant feature.
<br>
&amp;gt;
<br>
&amp;gt; Thanks very much.
<br>
&amp;gt;
<br>
&amp;gt;
<br>
&amp;gt;
<br>
&amp;gt; ---------------
<br>
&amp;gt; CHEN Song
<br>
&amp;gt; R&amp;amp;D Department
<br>
&amp;gt; National Supercomputer Center in Tianjin
<br>
&amp;gt; Binhai New Area, Tianjin, China
<br>
&amp;gt; _______________________________________________
<br>
&amp;gt; users mailing list
<br>
&amp;gt; users_at_[hidden]
<br>
&amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&amp;gt;
<br>
&amp;gt;
<br>
&amp;gt; _______________________________________________
<br>
&amp;gt; users mailing list
<br>
&amp;gt; users_at_[hidden]
<br>
&amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&amp;gt;
<br>
&amp;gt;
<br>
&amp;gt;
<br>
&amp;gt;
<br>
&amp;gt; ________________________________
<br>
&amp;gt;
<br>
&amp;gt; _______________________________________________
<br>
&amp;gt; users mailing list
<br>
&amp;gt; users_at_[hidden]
<br>
&amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&amp;gt;
<br>
&amp;gt; _______________________________________________
<br>
&amp;gt; users mailing list
<br>
&amp;gt; users_at_[hidden]
<br>
&amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19657/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19658.php">Josh Hursey: "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="19656.php">Shiqing Fan: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19658.php">Josh Hursey: "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="19658.php">Josh Hursey: "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
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
