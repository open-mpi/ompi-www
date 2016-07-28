<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 21 16:45:16 2005" -->
<!-- isoreceived="20051121214516" -->
<!-- sent="Mon, 21 Nov 2005 16:44:58 -0500" -->
<!-- isosent="20051121214458" -->
<!-- name="Enrique Curchitser" -->
<!-- email="ec605_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Configuring port" -->
<!-- id="CDA1C952-BCB9-4E27-B895-25A5539ADE2D_at_columbia.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="355e80696d79963388e0a3c7831631a7_at_open-mpi.org" -->
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
<strong>From:</strong> Enrique Curchitser (<em>ec605_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-21 16:44:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0379.php">Anthony Chan: "[O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>Previous message:</strong> <a href="0377.php">Galen M. Shipman: "Re: [O-MPI users] problem with overflow 1.8ab code using GM"</a>
<li><strong>In reply to:</strong> <a href="0369.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0384.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
<li><strong>Reply:</strong> <a href="0384.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, I'll take you up on the offer.   I have 4 Power Mac G5's on a  
<br>
private
<br>
&nbsp;&nbsp;network connected through a GigE switch.  Even for large problems
<br>
the communications are slugish.  This same code has shown to scale
<br>
to upwards of 128 processors on IBM SP's.  So here is the output
<br>
to ompi_info --param btl tcp.  Any help tunning this, or other  
<br>
parameters
<br>
would be greatly appreciated.  Are there any particular plugins for TCP?
<br>
<p>-----------------------------------------------------------
<br>
<p>MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If btl_base_debug is 1 standard debug is  
<br>
output, if &gt; 1 verbose debug is output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Default selection set of components for  
<br>
the btl framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_base_verbose&quot; (current  
<br>
value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verbosity level for the btl framework (0 =  
<br>
no verbosity)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_if_include&quot; (current  
<br>
value: &quot;en1&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current  
<br>
value: &quot;lo&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current  
<br>
value: &quot;8&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current  
<br>
value: &quot;-1&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current  
<br>
value: &quot;32&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value:  
<br>
&quot;131072&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value:  
<br>
&quot;131072&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current  
<br>
value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current  
<br>
value: &quot;65536&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current  
<br>
value: &quot;65536&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current  
<br>
value: &quot;131072&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current  
<br>
value: &quot;131072&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current  
<br>
value: &quot;2147483647&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_flags&quot; (current value:  
<br>
&quot;10&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_priority&quot; (current  
<br>
value: &quot;0&quot;)
<br>
<p>_________________
<br>
Enrique Curchitser
<br>
ec605_at_[hidden]
<br>
<p><p><p>On Nov 19, 2005, at 1:04 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Enrique --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also recently added a section to the FAQ about TCP optimization.
</span><br>
<span class="quotelev1">&gt; It's a bit sparse at the moment, but please feel free to pester us  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; questions -- whenever we see good questions, we add them to the FAQ!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning">http://www.open-mpi.org/faq/?category=tuning</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Be sure to look at the TCP BTL parameters that are available:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ompi_info --param btl tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many of them are still lacking descriptions, so, again, feel free to
</span><br>
<span class="quotelev1">&gt; pester us with questions.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 16, 2005, at 5:23 PM, Enrique Curchitser wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.  It did the trick!  Now on to optimizing the  
</span><br>
<span class="quotelev2">&gt;&gt; communications
</span><br>
<span class="quotelev2">&gt;&gt; over gig-ethernet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _________________
</span><br>
<span class="quotelev2">&gt;&gt; Enrique Curchitser
</span><br>
<span class="quotelev2">&gt;&gt; ec605_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 16, 2005, at 4:29 PM, Troy Telford wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, 16 Nov 2005 14:16:20 -0700, Enrique Curchitser
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ec605_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I put together a small cluster (4 computers) which has one head  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that sees the world
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and 3 that are on a private network.  If I want to use the head  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (which has 2 NICs)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as part of the ring, how do I tell it to go over the NIC that is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; part
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of the private network?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In mpich, there is a modification to the hostfile, but I did not  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; any such thing with OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's an entry from an earlier post to this list (in the archives)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; believe applies:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2005/11/0337.php">http://www.open-mpi.org/community/lists/users/2005/11/0337.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0379.php">Anthony Chan: "[O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>Previous message:</strong> <a href="0377.php">Galen M. Shipman: "Re: [O-MPI users] problem with overflow 1.8ab code using GM"</a>
<li><strong>In reply to:</strong> <a href="0369.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0384.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
<li><strong>Reply:</strong> <a href="0384.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
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
