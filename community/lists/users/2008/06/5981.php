<?
$subject_val = "[OMPI users] Outputting rank and size for all outputs.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 11:06:54 2008" -->
<!-- isoreceived="20080624150654" -->
<!-- sent="Tue, 24 Jun 2008 11:06:47 -0400" -->
<!-- isosent="20080624150647" -->
<!-- name="Mark Dobossy" -->
<!-- email="mdobossy_at_[hidden]" -->
<!-- subject="[OMPI users] Outputting rank and size for all outputs." -->
<!-- id="177726EB-7222-4379-B525-CC6A82991EBF_at_princeton.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Outputting rank and size for all outputs.<br>
<strong>From:</strong> Mark Dobossy (<em>mdobossy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-24 11:06:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5982.php">Galen Arnold: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Previous message:</strong> <a href="5980.php">Jeff Squyres: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5982.php">Galen Arnold: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Reply:</strong> <a href="5982.php">Galen Arnold: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Reply:</strong> <a href="5983.php">Ashley Pittman: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lately I have been doing a great deal of MPI debugging.  I have, on an  
<br>
occasion or two, fallen into the trap of &quot;Well, that error MUST be  
<br>
coming from rank X.  There is no way it could be coming from any other  
<br>
rank...&quot;  Then proceeding to debug what's happening at rank X, only to  
<br>
find out a few frustrating hours later that rank Y is throwing the  
<br>
output (I'm sure no one else out there has fallen into this trap).  It  
<br>
was at that point, I decided to write up some code to automatically  
<br>
(sort of) output the rank and size of my domain with every output.  I  
<br>
write mostly in C++, and this is what I came up with:
<br>
<p>#include &lt;iostream&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>std::ostream &amp;mpi_info(std::ostream &amp;s) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank, size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank = MPI::COMM_WORLD.Get_rank();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = MPI::COMM_WORLD.Get_size();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;s &lt;&lt; &quot;[rk:&quot; &lt;&lt; rank &lt;&lt; &quot;,sz:&quot; &lt;&lt; size &lt;&lt; &quot;]: &quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return s;
<br>
}
<br>
<p>Then in my code, I have changed:
<br>
<p>std::cerr &lt;&lt; &quot;blah&quot; &lt;&lt; std::endl;
<br>
<p>to:
<br>
<p>std::cerr &lt;&lt; mpi_info &lt;&lt; &quot;blah&quot; &lt;&lt; std::endl;
<br>
<p>(or cout, or file stream, etc...)
<br>
<p>where &quot;blah&quot; is some amazingly informative error message.
<br>
<p>Are there other ways people do this?  Simpler ways perhaps?
<br>
<p>-Mark
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5982.php">Galen Arnold: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Previous message:</strong> <a href="5980.php">Jeff Squyres: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5982.php">Galen Arnold: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Reply:</strong> <a href="5982.php">Galen Arnold: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Reply:</strong> <a href="5983.php">Ashley Pittman: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
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
