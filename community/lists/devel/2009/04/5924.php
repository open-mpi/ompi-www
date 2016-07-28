<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 14:43:17 2009" -->
<!-- isoreceived="20090430184317" -->
<!-- sent="Thu, 30 Apr 2009 12:43:05 -0600" -->
<!-- isosent="20090430184305" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="B51670D6-1188-4588-B5F2-B89F47CA22F4_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49F9EDD7.3000402_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Inherent limit on #communicators?<br>
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 14:43:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5925.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5923.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5922.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5928.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5928.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to throw out more info on this, the test code runs fine on  
<br>
previous versions of OMPI.  It only hangs on the 1.3 line when the cid  
<br>
reaches 65536.
<br>
<p>-david
<br>
<pre>
--
David Gunter
HPC-3: Parallel Tools Team
Los Alamos National Laboratory
On Apr 30, 2009, at 12:28 PM, Edgar Gabriel wrote:
&gt; cid's are in fact not recycled in the block algorithm. The problem  
&gt; is that comm_free is not collective, so you can not make any  
&gt; assumptions whether other procs have also released that communicator.
&gt;
&gt;
&gt; But nevertheless, a cid in the communicator structure is a uint32_t,  
&gt; so it should not hit the 16k limit there yet. this is not new, so if  
&gt; there is a discrepancy between what the comm structure assumes that  
&gt; a cid is and what the pml assumes, than this was in the code since  
&gt; the very first days of Open MPI...
&gt;
&gt; Thanks
&gt; Edgar
&gt;
&gt; Brian W. Barrett wrote:
&gt;&gt; On Thu, 30 Apr 2009, Ralph Castain wrote:
&gt;&gt;&gt; We seem to have hit a problem here - it looks like we are seeing a
&gt;&gt;&gt; built-in limit on the number of communicators one can create in a
&gt;&gt;&gt; program. The program basically does a loop, calling MPI_Comm_split  
&gt;&gt;&gt; each
&gt;&gt;&gt; time through the loop to create a sub-communicator, does a reduce
&gt;&gt;&gt; operation on the members of the sub-communicator, and then calls
&gt;&gt;&gt; MPI_Comm_free to release it (this is a minimized reproducer for  
&gt;&gt;&gt; the real
&gt;&gt;&gt; code). After 64k times through the loop, the program fails.
&gt;&gt;&gt;
&gt;&gt;&gt; This looks remarkably like a 16-bit index that hits a max value  
&gt;&gt;&gt; and then
&gt;&gt;&gt; blocks.
&gt;&gt;&gt;
&gt;&gt;&gt; I have looked at the communicator code, but I don't immediately  
&gt;&gt;&gt; see such
&gt;&gt;&gt; a field. Is anyone aware of some other place where we would have a  
&gt;&gt;&gt; limit
&gt;&gt;&gt; that would cause this problem?
&gt;&gt; There's a maximum of 32768 communicator ids when using OB1 (each  
&gt;&gt; PML can set the max contextid, although the communicator code is  
&gt;&gt; the part that actually assigns a cid).  Assuming that comm_free is  
&gt;&gt; actually properly called, there should be plenty of cids available  
&gt;&gt; for that pattern. However, I'm not sure I understand the block  
&gt;&gt; algorithm someone added to cid allocation - I'd have to guess that  
&gt;&gt; there's something funny with that routine and cids aren't being  
&gt;&gt; recycled properly.
&gt;&gt; Brian
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt; -- 
&gt; Edgar Gabriel
&gt; Assistant Professor
&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
&gt; Department of Computer Science          University of Houston
&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5925.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5923.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5922.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5928.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5928.php">David Gunter: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
