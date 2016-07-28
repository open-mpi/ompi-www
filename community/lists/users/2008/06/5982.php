<?
$subject_val = "Re: [OMPI users] Outputting rank and size for all outputs.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 11:27:49 2008" -->
<!-- isoreceived="20080624152749" -->
<!-- sent="Tue, 24 Jun 2008 10:27:38 -0500 (CDT)" -->
<!-- isosent="20080624152738" -->
<!-- name="Galen Arnold" -->
<!-- email="arnoldg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Outputting rank and size for all outputs." -->
<!-- id="1052122366.673651214321258237.JavaMail.root_at_zimbra-1.ncsa.uiuc.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="177726EB-7222-4379-B525-CC6A82991EBF_at_princeton.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Outputting rank and size for all outputs.<br>
<strong>From:</strong> Galen Arnold (<em>arnoldg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-24 11:27:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5983.php">Ashley Pittman: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Previous message:</strong> <a href="5981.php">Mark Dobossy: "[OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>In reply to:</strong> <a href="5981.php">Mark Dobossy: "[OMPI users] Outputting rank and size for all outputs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5983.php">Ashley Pittman: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
an option-
<br>
<p><a href="http://www.ncsa.uiuc.edu/UserInfo/Resources/Hardware/CommonDoc/gdbwhere.html">http://www.ncsa.uiuc.edu/UserInfo/Resources/Hardware/CommonDoc/gdbwhere.html</a>
<br>
<p>Galen Arnold
<br>
system engineer
<br>
NCSA
<br>
<p>----- Original Message -----
<br>
From: &quot;Mark Dobossy&quot; &lt;mdobossy_at_[hidden]&gt;
<br>
To: users_at_[hidden]
<br>
Sent: Tuesday, June 24, 2008 10:06:47 AM GMT -06:00 US/Canada Central
<br>
Subject: [OMPI users] Outputting rank and size for all outputs.
<br>
<p>Lately I have been doing a great deal of MPI debugging.  I have, on an  
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
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5983.php">Ashley Pittman: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Previous message:</strong> <a href="5981.php">Mark Dobossy: "[OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>In reply to:</strong> <a href="5981.php">Mark Dobossy: "[OMPI users] Outputting rank and size for all outputs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5983.php">Ashley Pittman: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
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
