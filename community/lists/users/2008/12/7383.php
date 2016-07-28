<?
$subject_val = "Re: [OMPI users] collective algorithms";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 08:59:58 2008" -->
<!-- isoreceived="20081202135958" -->
<!-- sent="Tue, 2 Dec 2008 08:59:48 -0500" -->
<!-- isosent="20081202135948" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] collective algorithms" -->
<!-- id="4B282E9C-0655-426E-8A11-78E76DC7DD7D_at_cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6750442a0811250729r2cf2e057ufdd7f8533f74a1e_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-02 08:59:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7384.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7382.php">Gustavo Seabra: "Re: [OMPI users] openmpi-1.2.8 and cygwin..."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/11/7373.php">&#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215;: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7436.php">Максим Чусовлянов: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Reply:</strong> <a href="7436.php">Максим Чусовлянов: "Re: [OMPI users] collective algorithms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 25, 2008, at 10:29 AM, &#208;&#156;&#208;&#176;&#208;&#186;&#209;&#129;&#208;&#184;&#208;&#188; &#208;&#167;&#209;&#131;&#209;&#129;&#208;&#190;&#208;&#178;&#208;&#187;&#209;&#143;&#208;&#189;&#208;&#190;&#208;&#178; wrote:
<br>
<p><span class="quotelev1">&gt; Hello! How i can integrated my collective communication algorithm in  
</span><br>
<span class="quotelev1">&gt; openMPI with MCA?
</span><br>
<p>Sorry for the delay in answering -- SC08 and the US holiday last week  
<br>
got in the way and I'm way behind on answering the mails in my INBOX.
<br>
<p>Just to make sure we're talking about the same thing -- you have a new  
<br>
collective algorithm for one of the MPI collective functions, and you  
<br>
want to include that code in Open MPI so that it can be invoked by  
<br>
MPI_&lt;foo&gt; in MPI applications, right?
<br>
<p>If so, the right way to do this is to build a new Open MPI  
<br>
&quot;coll&quot; (collective) component containing the code for your new  
<br>
algorithm.  Our coll components are basically a few housekeeping  
<br>
functions and a bunch of function pointers for the functions to call  
<br>
that are the back-ends to MPI collective functions (i.e., MPI_Bcast  
<br>
and friends).
<br>
<p>All the &quot;coll&quot; component code is under the ompi/mca/coll/ directory.   
<br>
The &quot;base&quot; directory is some &quot;glue&quot; code for the coll framework itself  
<br>
-- it's not a component.  But all other directories are standalone  
<br>
components that have corresponding dynamic shared objects (DSOs)  
<br>
installed under $pkglibdir (typically $prefix/lib/openmpi).
<br>
<p>You can build a component inside or outside of the Open MPI tree.  If  
<br>
you build outside of the Open MPI tree, you need to configure OMPI  
<br>
with --with-devel-headers, which will install all of OMPI's internal  
<br>
headers under $prefix.  That way, you can -I these headers when you  
<br>
compile your component.  Just install your DSO in $pkglibdir; if all  
<br>
goes well, &quot;ompi_info | grep coll&quot; should show your component.
<br>
<p>If you build inside of the Open MPI tree, you need to make your  
<br>
component dir under ompi/mca/coll/ and include a configure.params file  
<br>
(look at ompi/mca/coll/basic/configure.params for a simple example)  
<br>
and a Makefile.am (see ompi/mca/coll/basic/Makefile.am for an  
<br>
example).  Then run the &quot;autogen.sh&quot; script that is at the top of the  
<br>
tree and then run configure.  You should see your component listed in  
<br>
both the autogen.sh and configure output; configure should not that it  
<br>
plans to build that component.  When you finish configure, build and  
<br>
install Open MPI.  &quot;ompi_info | grep coll&quot; should show your component.
<br>
<p>But I'm getting ahead of myself...  Let's go back a few steps...
<br>
<p>When building inside the OMPI tree, if you need to check for various  
<br>
things to determine if you can build the component (i.e., some tests  
<br>
during configure, such as checking for various hardware support  
<br>
libraries), you can also add a configure.m4 file in your component's  
<br>
directory.  This gets a little tricky if you're not familiar with  
<br>
Autoconf; let me know if you need some guidance here.
<br>
<p>Now you can add the source code to the component.  We have 2 important  
<br>
abstractions that you need to know about:
<br>
<p>- component: there is only one component instance in an MPI process.   
<br>
It has global state.
<br>
- module: in the coll framework, there is one module instance for  
<br>
every communicator that uses this component.  It has local state  
<br>
relevant to that specific communicator.
<br>
<p>Think of &quot;component&quot; as a C++ class, and &quot;module&quot; as a C++ object.
<br>
<p>Now read the comments in ompi/mca/coll/coll.h.  This file contains the  
<br>
struct interfaces for both the coll component and module.  We  
<br>
basically do everything by function pointer; the component returns a  
<br>
set of function pointers and each module returns a struct of function  
<br>
pointers.  These function pointers are invoked by libmpi at various  
<br>
times for various functions; see coll.h for a description of each.
<br>
<p>During coll module initialization (i.e., when a new communicator has  
<br>
been created), there's a process called &quot;selection&quot; where OMPI  
<br>
determines which coll modules will be used on this communicator.   
<br>
Modules can include/exclude themselves from the selection process.   
<br>
For example, your algorithm may only be suitable for  
<br>
intracommunicators.  So if the communicator in question that is being  
<br>
created is an intercommunicator, you probably want to exclude your  
<br>
module from selection.  Or if your algorithm can only handle powers-of- 
<br>
two MPI processes, it should exclude itself if there is a non-power-of- 
<br>
two number of processes in the communicator.  And so on.
<br>
<p>We designed coll modules in OMPI v1.3 to be &quot;mix-n-match&quot;-able such  
<br>
that in a single communicator, you can use the broadcast function from  
<br>
one module, but the gather function from a different module.  Hence,  
<br>
multiple coll modules may be active on a single communicator.  In your  
<br>
case, you'll need to make sure that your function has a higher  
<br>
priority than the &quot;tuned&quot; coll component (which is the default in many  
<br>
cases).
<br>
<p>I'd suggest working in the Open MPI v1.3 tree, as we're going to  
<br>
release this version soon and all future work is being done here (vs.  
<br>
the v1.2 tree, which will eventually be deprecated).
<br>
<p>Hopefully this is enough information to get you going.  Please feel  
<br>
free to ask more questions!  But you might want to post followup  
<br>
questions to the devel list; these aren't really user-level questions.
<br>
<p>Good luck!
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7384.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7382.php">Gustavo Seabra: "Re: [OMPI users] openmpi-1.2.8 and cygwin..."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/11/7373.php">&#237;&#193;&#203;&#211;&#201;&#205; &#254;&#213;&#211;&#207;&#215;&#204;&#209;&#206;&#207;&#215;: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7436.php">Максим Чусовлянов: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Reply:</strong> <a href="7436.php">Максим Чусовлянов: "Re: [OMPI users] collective algorithms"</a>
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
