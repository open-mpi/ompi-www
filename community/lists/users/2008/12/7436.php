<?
$subject_val = "Re: [OMPI users] collective algorithms";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  6 10:32:19 2008" -->
<!-- isoreceived="20081206153219" -->
<!-- sent="Sat, 6 Dec 2008 21:32:12 +0600" -->
<!-- isosent="20081206153212" -->
<!-- name="&#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215;" -->
<!-- email="chmaxx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] collective algorithms" -->
<!-- id="6750442a0812060732m2cac2e9er5019b6837219645b_at_mail.gmail.com" -->
<!-- charset="KOI8-R" -->
<!-- inreplyto="4B282E9C-0655-426E-8A11-78E76DC7DD7D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] collective algorithms<br>
<strong>From:</strong> &#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215; (<em>chmaxx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-06 10:32:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7437.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Previous message:</strong> <a href="7435.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>In reply to:</strong> <a href="7383.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7437.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Reply:</strong> <a href="7437.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello. Thanks for your response. I'm  create a my module and component into
<br>
the coll. But when I execute autogen.sh, it's return ../../libtool: line
<br>
847: X--tag=CC: command not found
<br>
../../libtool: line 880: libtool: ignoring unknown tag : command not found
<br>
../../libtool: line 847: X--mode=compile: command not found
<br>
&nbsp;I have a libtool v 1.5.26. Can you get me a some guide about create
<br>
configure.m4.
<br>
<p>2008/12/2 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Nov 25, 2008, at 10:29 AM, &#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello! How i can integrated my collective communication algorithm in
</span><br>
<span class="quotelev2">&gt;&gt; openMPI with MCA?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the delay in answering -- SC08 and the US holiday last week got
</span><br>
<span class="quotelev1">&gt; in the way and I'm way behind on answering the mails in my INBOX.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to make sure we're talking about the same thing -- you have a new
</span><br>
<span class="quotelev1">&gt; collective algorithm for one of the MPI collective functions, and you want
</span><br>
<span class="quotelev1">&gt; to include that code in Open MPI so that it can be invoked by MPI_&lt;foo&gt; in
</span><br>
<span class="quotelev1">&gt; MPI applications, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, the right way to do this is to build a new Open MPI &quot;coll&quot;
</span><br>
<span class="quotelev1">&gt; (collective) component containing the code for your new algorithm.  Our coll
</span><br>
<span class="quotelev1">&gt; components are basically a few housekeeping functions and a bunch of
</span><br>
<span class="quotelev1">&gt; function pointers for the functions to call that are the back-ends to MPI
</span><br>
<span class="quotelev1">&gt; collective functions (i.e., MPI_Bcast and friends).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the &quot;coll&quot; component code is under the ompi/mca/coll/ directory.  The
</span><br>
<span class="quotelev1">&gt; &quot;base&quot; directory is some &quot;glue&quot; code for the coll framework itself -- it's
</span><br>
<span class="quotelev1">&gt; not a component.  But all other directories are standalone components that
</span><br>
<span class="quotelev1">&gt; have corresponding dynamic shared objects (DSOs) installed under $pkglibdir
</span><br>
<span class="quotelev1">&gt; (typically $prefix/lib/openmpi).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can build a component inside or outside of the Open MPI tree.  If you
</span><br>
<span class="quotelev1">&gt; build outside of the Open MPI tree, you need to configure OMPI with
</span><br>
<span class="quotelev1">&gt; --with-devel-headers, which will install all of OMPI's internal headers
</span><br>
<span class="quotelev1">&gt; under $prefix.  That way, you can -I these headers when you compile your
</span><br>
<span class="quotelev1">&gt; component.  Just install your DSO in $pkglibdir; if all goes well,
</span><br>
<span class="quotelev1">&gt; &quot;ompi_info | grep coll&quot; should show your component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you build inside of the Open MPI tree, you need to make your component
</span><br>
<span class="quotelev1">&gt; dir under ompi/mca/coll/ and include a configure.params file (look at
</span><br>
<span class="quotelev1">&gt; ompi/mca/coll/basic/configure.params for a simple example) and a Makefile.am
</span><br>
<span class="quotelev1">&gt; (see ompi/mca/coll/basic/Makefile.am for an example).  Then run the
</span><br>
<span class="quotelev1">&gt; &quot;autogen.sh&quot; script that is at the top of the tree and then run configure.
</span><br>
<span class="quotelev1">&gt;  You should see your component listed in both the autogen.sh and configure
</span><br>
<span class="quotelev1">&gt; output; configure should not that it plans to build that component.  When
</span><br>
<span class="quotelev1">&gt; you finish configure, build and install Open MPI.  &quot;ompi_info | grep coll&quot;
</span><br>
<span class="quotelev1">&gt; should show your component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I'm getting ahead of myself...  Let's go back a few steps...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When building inside the OMPI tree, if you need to check for various things
</span><br>
<span class="quotelev1">&gt; to determine if you can build the component (i.e., some tests during
</span><br>
<span class="quotelev1">&gt; configure, such as checking for various hardware support libraries), you can
</span><br>
<span class="quotelev1">&gt; also add a configure.m4 file in your component's directory.  This gets a
</span><br>
<span class="quotelev1">&gt; little tricky if you're not familiar with Autoconf; let me know if you need
</span><br>
<span class="quotelev1">&gt; some guidance here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now you can add the source code to the component.  We have 2 important
</span><br>
<span class="quotelev1">&gt; abstractions that you need to know about:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - component: there is only one component instance in an MPI process.  It
</span><br>
<span class="quotelev1">&gt; has global state.
</span><br>
<span class="quotelev1">&gt; - module: in the coll framework, there is one module instance for every
</span><br>
<span class="quotelev1">&gt; communicator that uses this component.  It has local state relevant to that
</span><br>
<span class="quotelev1">&gt; specific communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Think of &quot;component&quot; as a C++ class, and &quot;module&quot; as a C++ object.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now read the comments in ompi/mca/coll/coll.h.  This file contains the
</span><br>
<span class="quotelev1">&gt; struct interfaces for both the coll component and module.  We basically do
</span><br>
<span class="quotelev1">&gt; everything by function pointer; the component returns a set of function
</span><br>
<span class="quotelev1">&gt; pointers and each module returns a struct of function pointers.  These
</span><br>
<span class="quotelev1">&gt; function pointers are invoked by libmpi at various times for various
</span><br>
<span class="quotelev1">&gt; functions; see coll.h for a description of each.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; During coll module initialization (i.e., when a new communicator has been
</span><br>
<span class="quotelev1">&gt; created), there's a process called &quot;selection&quot; where OMPI determines which
</span><br>
<span class="quotelev1">&gt; coll modules will be used on this communicator.  Modules can include/exclude
</span><br>
<span class="quotelev1">&gt; themselves from the selection process.  For example, your algorithm may only
</span><br>
<span class="quotelev1">&gt; be suitable for intracommunicators.  So if the communicator in question that
</span><br>
<span class="quotelev1">&gt; is being created is an intercommunicator, you probably want to exclude your
</span><br>
<span class="quotelev1">&gt; module from selection.  Or if your algorithm can only handle powers-of-two
</span><br>
<span class="quotelev1">&gt; MPI processes, it should exclude itself if there is a non-power-of-two
</span><br>
<span class="quotelev1">&gt; number of processes in the communicator.  And so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We designed coll modules in OMPI v1.3 to be &quot;mix-n-match&quot;-able such that in
</span><br>
<span class="quotelev1">&gt; a single communicator, you can use the broadcast function from one module,
</span><br>
<span class="quotelev1">&gt; but the gather function from a different module.  Hence, multiple coll
</span><br>
<span class="quotelev1">&gt; modules may be active on a single communicator.  In your case, you'll need
</span><br>
<span class="quotelev1">&gt; to make sure that your function has a higher priority than the &quot;tuned&quot; coll
</span><br>
<span class="quotelev1">&gt; component (which is the default in many cases).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd suggest working in the Open MPI v1.3 tree, as we're going to release
</span><br>
<span class="quotelev1">&gt; this version soon and all future work is being done here (vs. the v1.2 tree,
</span><br>
<span class="quotelev1">&gt; which will eventually be deprecated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hopefully this is enough information to get you going.  Please feel free to
</span><br>
<span class="quotelev1">&gt; ask more questions!  But you might want to post followup questions to the
</span><br>
<span class="quotelev1">&gt; devel list; these aren't really user-level questions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good luck!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7436/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7437.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Previous message:</strong> <a href="7435.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>In reply to:</strong> <a href="7383.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7437.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Reply:</strong> <a href="7437.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
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
