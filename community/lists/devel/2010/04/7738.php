<?
$subject_val = "[OMPI devel] bind-to-board [was: problem when binding to socket on a single socket node]";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 12 13:53:52 2010" -->
<!-- isoreceived="20100412175352" -->
<!-- sent="Mon, 12 Apr 2010 10:56:03 -0700" -->
<!-- isosent="20100412175603" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] bind-to-board [was: problem when binding to socket on a single socket node]" -->
<!-- id="4BC35EB3.6020607_at_oracle.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B23DCBE3-3F62-498E-9A39-25E6F8AA17DA_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] bind-to-board [was: problem when binding to socket on a single socket node]<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-12 13:56:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7739.php">Ralph Castain: "Re: [OMPI devel] bind-to-board [was: problem when binding to socket on a single socket node]"</a>
<li><strong>Previous message:</strong> <a href="7737.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7737.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7739.php">Ralph Castain: "Re: [OMPI devel] bind-to-board [was: problem when binding to socket on a single socket node]"</a>
<li><strong>Reply:</strong> <a href="7739.php">Ralph Castain: "Re: [OMPI devel] bind-to-board [was: problem when binding to socket on a single socket node]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;On Apr 12, 2010, at 8:42 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;If someone tells us -bind-to-socket, but there is only one socket, then we really cannot bind them to anything. Any check by their code would reveal that they had not, in fact, been bound - raising questions as to whether or not OMPI is performing the request. Our operating standard has been to error out if the user specifies something we cannot do to avoid that kind of confusion. This is what generated the code in the system today.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Now I can see an argument that -bind-to-socket with one socket maybe shouldn't generate an error, but that decision then has to get reflected in other code areas as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;But first we need to resolve the question: should this scenario return an error or not?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;From the onset of the -bind-to-X functionality, -bind-to-board -byboard for a single-board system would result in binding to everything|nothing -- is the glass completely full or completely empty?  In any case, no error.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;Only because we haven't really implemented bind-to-board yet
</span><br>
<span class="quotelev1">&gt;
</span><br>
Well, we have implemented it.  It's accepted by &quot;mpirun&quot; and listed by 
<br>
&quot;mpirun --help&quot;.  So, there's a bug.  Shall I fill a trac ticket?
<br>
<p><span class="quotelev1">&gt;- once we do (should that happen), then it would indeed generate an error.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Consider a single-board, two-socket, quad-core node and these command lines with 1.3.4r22104:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;% mpirun -H mynode -n 1 -bycore   -bind-to-core   -report-bindings ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;% mpirun -H mynode -n 1 -bysocket -bind-to-socket -report-bindings ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;% mpirun -H mynode -n 1 -byboard  -bind-to-board  -report-bindings ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The first binds to &quot;cpus 0001&quot;, the second to &quot;socket 0 cpus 000f&quot;, and the third reports no bindings (&quot;bind to everything&quot;) and no errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7739.php">Ralph Castain: "Re: [OMPI devel] bind-to-board [was: problem when binding to socket on a single socket node]"</a>
<li><strong>Previous message:</strong> <a href="7737.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7737.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7739.php">Ralph Castain: "Re: [OMPI devel] bind-to-board [was: problem when binding to socket on a single socket node]"</a>
<li><strong>Reply:</strong> <a href="7739.php">Ralph Castain: "Re: [OMPI devel] bind-to-board [was: problem when binding to socket on a single socket node]"</a>
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
