<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 15 10:08:01 2007" -->
<!-- isoreceived="20070415140801" -->
<!-- sent="Sun, 15 Apr 2007 10:07:47 -0400" -->
<!-- isosent="20070415140747" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level" -->
<!-- id="F3520547-97CF-4971-A070-6B8A2728C664_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="32881.130.207.5.119.1176608192.squirrel_at_webmail.cc.gatech.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-15 10:07:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1413.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1411.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1411.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1413.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1413.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is unfortunately not enough information to provide any help --  
<br>
the (lots of output) parts are pretty important.  Can you provide all  
<br>
the information cited here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Apr 14, 2007, at 11:36 PM, pooja_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi!!!
</span><br>
<span class="quotelev1">&gt; Thanks for help!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right now I am just trying to install the normal openmpi(without  
</span><br>
<span class="quotelev1">&gt; using all
</span><br>
<span class="quotelev1">&gt; development header files).
</span><br>
<span class="quotelev1">&gt; But it is still giving me some error.
</span><br>
<span class="quotelev1">&gt; I have downloaded the developer version from the openmpi.org site.
</span><br>
<span class="quotelev1">&gt; Then I gave
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/net/hc293/pooja/dev_openmpi
</span><br>
<span class="quotelev1">&gt; (lots of out put)
</span><br>
<span class="quotelev1">&gt; make all install
</span><br>
<span class="quotelev1">&gt; (lots of output )
</span><br>
<span class="quotelev1">&gt; and error :ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libopen-pal.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/net/hc293/pooja/openmpi-1.2.1a0r14362- 
</span><br>
<span class="quotelev1">&gt; dev/opal'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/net/hc293/pooja/openmpi-1.2.1a0r14362- 
</span><br>
<span class="quotelev1">&gt; dev/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also the dev_openmpi folder is empty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SO I am not able to complie normal ring_c.c example also.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please help
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks and Regards
</span><br>
<span class="quotelev1">&gt; Pooja
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Configure with the --with-devel-headers switch.  This will install
</span><br>
<span class="quotelev2">&gt;&gt; all the developer headers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you care, check out &quot;./configure --help&quot; -- that shows all the
</span><br>
<span class="quotelev2">&gt;&gt; options available to the configure script (including --with-devel-
</span><br>
<span class="quotelev2">&gt;&gt; headers).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 13, 2007, at 7:36 PM, pooja_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have downloaded the developer version of source code by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; downloading a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nightly Subversion snapshot tarball.And have installed the openmpi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/usr/local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make all install.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I want to install with all the development headers.So that I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can write
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an application that can use Ompi internal headers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks and Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pooja
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 1, 2007, at 3:12 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can't help you with the BTL question. On the others:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, you can &quot;sorta&quot; call BTL's directly from application programs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (are you trying to use MPI alongside other communication libraries,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and using the BTL components as a sample?), but there are issues
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; involved with this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; First, you need to install Open MPI with all the development
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; headers.  Open MPI normally only installs &quot;mpi.h&quot; and a small  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; number
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of other heads; installing *all* the headers will allow you to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; write
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; applications that use OMPI's internal headers (such as btl.h) while
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; developing outside of the Open MPI source tree.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Second, you probably won't want to access the BTL's directly.  To
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make this make sense, here's how the code is organized (even if the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specific call sequence is not exactly this layered for performance/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; optimization reasons):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI layer (e.g., MPI_SEND)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   -&gt; PML
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     -&gt; BML
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       -&gt; BTL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You have two choices:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. Go through the PML instead (this is what we do in the MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collectives, for example) -- but this imposes MPI semantics on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sending and receiving, which assumedly you are trying to avoid.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Check out ompi/mca/pml/pml.h.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. Go through the BML instead -- the BTL Management Layer.  This is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; essentially a multiplexor for all the BTLs that have been
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; instantiated.  I'm guessing that this is what you want to do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (remember that OMPI has true multi-device support; using the BML  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; multiple BTLs is one of the ways that we do this).  Have a look at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi/mca/bml/bml.h for the interface.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is also currently no mechanism to get the BML and BTL  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pointers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that were instantiated by the PML.  However, if you're just doing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; proof-of-concept code, you can extract these directly from the MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; layer's global variables to see how this stuff works.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To have full interoperability of the underlying BTLs and between
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; multiple upper-layer communication libraries (e.g., between OMPI  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something else) is something that we have talked about a little,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have not done much work on.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To see the BTL interface (just for completeness), see ompi/mca/btl/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl.h.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can probably see the pattern here...  In all of Open MPI's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; frameworks, the public interface is in &lt;level&gt;/mca/&lt;framework&gt;/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;framework&gt;.h, where &lt;level&gt; is one of opal, orte, or ompi, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;framework&gt; is the name of the framework.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. states are reported via the orte/mca/smr framework. You will  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; see
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; states listed in orte/mca/smr/smr_types.h. We track both process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and job
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; states. Hopefully, the state names will be somewhat self-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; explanatory and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; indicative of the order in which they are traversed. The job  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; states
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are set
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when *all* of the processes in the job reach the corresponding
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; state.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note that these are very coarse-grained process-level states (e.g.,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is a given process running or not?).  It's not clear what kind of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; states you were asking about -- the Open MPI code base has many
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; internal state machines for various message passing and other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mechanisms.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What information are you looking for, specifically?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. I'm not sure what you mean by mapping MPI processes to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;physical&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes, but I assume you mean how do we assign MPI ranks to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specific nodes. You will find that done in the orte/mca/rmaps
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; framework. We
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; currently only have one component in that framework - the round-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; robin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; implementation - that maps either by slot or by node, as indicated
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; by the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; user. That code is fairly heavily commented, so you hopefully can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; understand
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; what it is doing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hope that helps!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 4/1/07 1:32 PM, &quot;pooja_at_[hidden]&quot; &lt;pooja_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am Pooja and I am working on a course project which requires me
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -&gt; to track the internal state changes of MPI and need me to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; figure out
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; how does ORTE maps MPi Process to actual physical processes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -&gt;Also I need to find way to get BTL transports work directly  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; level calls.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I just want to know is this posible and if yes what procedure I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; should
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; follow or I should look into which files (for change).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Please Help
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks and Regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Pooja
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1413.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1411.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1411.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1413.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1413.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
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
