<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  8 12:34:15 2007" -->
<!-- isoreceived="20070308173415" -->
<!-- sent="Thu, 08 Mar 2007 18:33:56 +0100" -->
<!-- isosent="20070308173356" -->
<!-- name="Jean-Christophe Mignot" -->
<!-- email="jean-christophe.mignot_at_[hidden]" -->
<!-- subject="[OMPI users] running jobs on heteregenous clusters" -->
<!-- id="45F04904.9060509_at_ens-lyon.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C17A8A52.432%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jean-Christophe Mignot (<em>jean-christophe.mignot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-08 12:33:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2771.php">Olesen, Mark: "[OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2769.php">George Bosilca: "Re: [OMPI users] MPI_PACK very slow?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2173.php">Ralph Castain: "Re: [OMPI users] debugging problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;Hi,
<br>
<p>I'm trying to make simple tests between 2 clusters that are quite 
<br>
different :
<br>
the 1st uses eth0 for its administration netwrk and eth1 as the normal net
<br>
the 2nd uses eth1 for its administration network and eth0 as the normal net
<br>
When I launch my test, I got :
<br>
<p><span class="quotelev1">&gt;  *** An error occurred in MPI_Send
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;  *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt;  *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;  [0,0,0]-[0,1,0] mca_oob_tcp_msg_recv: readv failed with errno=104
</span><br>
<p>I've tried to have 2 differents mca-params.conf files (one for each 
<br>
site), but it doesn't work. Note that my little test works fine on 2 
<br>
clusters having the same networks config.
<br>
Any idea anyboby ? Is this theorically possible or not ?
<br>
Thanks in advance,
<br>
jc
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2771.php">Olesen, Mark: "[OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2769.php">George Bosilca: "Re: [OMPI users] MPI_PACK very slow?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2173.php">Ralph Castain: "Re: [OMPI users] debugging problem"</a>
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
