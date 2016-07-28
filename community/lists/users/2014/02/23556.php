<?
$subject_val = "Re: [OMPI users] writev error: Bad address";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  5 21:58:27 2014" -->
<!-- isoreceived="20140206025827" -->
<!-- sent="Wed, 05 Feb 2014 18:58:25 -0800" -->
<!-- isosent="20140206025825" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] writev error: Bad address" -->
<!-- id="52F2FA51.6090203_at_biostat.ucsf.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52EC10D9.2060400_at_biostat.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] writev error: Bad address<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-05 21:58:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23557.php">Christoph Niethammer: "[OMPI users] GNU 4.8.x and (no) mpi_f08 module"</a>
<li><strong>Previous message:</strong> <a href="23555.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create	the, sub-directory"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23517.php">Ross Boylan: "[OMPI users] writev error: Bad address"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23559.php">Jeff Squyres (jsquyres): "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>Reply:</strong> <a href="23559.php">Jeff Squyres (jsquyres): "Re: [OMPI users] writev error: Bad address"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/31/2014 1:08 PM, Ross Boylan wrote:
<br>
<span class="quotelev1">&gt; I am getting the following error, amidst many successful message sends:
</span><br>
<span class="quotelev1">&gt; [n10][[50048,1],1][../../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c:118:mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error (0x7f6155970038, 578659815)
</span><br>
<span class="quotelev1">&gt;          Bad address(1)
</span><br>
I think I've tracked down the immediate cause: I was sending a very 
<br>
large object (from R--I assume serialized into a byte stream) that was 
<br>
over 3G.  I'm not sure why it would produce that error, but it doesn't 
<br>
seem that surprising that something would go wrong.
<br>
<p>Ross
<br>
<span class="quotelev1">&gt; Any ideas about what is going on or what I can do to fix it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using the openmpi-bin 1.4.2-4 Debian package on a cluster running 
</span><br>
<span class="quotelev1">&gt; Debian squeeze.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I couldn't find a config.log file; there is 
</span><br>
<span class="quotelev1">&gt; /etc/openmpi/openmpi-mca-params.conf, which is completely commented out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Invocation is from R 3.0.1 (debian package) with Rmpi 0.6.3 built by 
</span><br>
<span class="quotelev1">&gt; me from source in a local directory. My sends all use mpi.isend.Robj 
</span><br>
<span class="quotelev1">&gt; and the receives use mpi.recv.Robj, both from the Rmpi library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The jobs were started with rmpilaunch; it and the hosts file are 
</span><br>
<span class="quotelev1">&gt; included in the attachments. TCP connections.  rmpilaunch leaves me in 
</span><br>
<span class="quotelev1">&gt; an R session on the master.  I invoked the code inside the toplevel() 
</span><br>
<span class="quotelev1">&gt; function toward the bottom of dbox-master.R.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program source files and other background information is in the 
</span><br>
<span class="quotelev1">&gt; attached file.    n10 has the output of |ompi_info --all, and n1011 
</span><br>
<span class="quotelev1">&gt; has other info for both nodes that were active (n10 was master; n11 
</span><br>
<span class="quotelev1">&gt; had some slaves).
</span><br>
<span class="quotelev1">&gt; |
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23556/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23557.php">Christoph Niethammer: "[OMPI users] GNU 4.8.x and (no) mpi_f08 module"</a>
<li><strong>Previous message:</strong> <a href="23555.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create	the, sub-directory"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23517.php">Ross Boylan: "[OMPI users] writev error: Bad address"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23559.php">Jeff Squyres (jsquyres): "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>Reply:</strong> <a href="23559.php">Jeff Squyres (jsquyres): "Re: [OMPI users] writev error: Bad address"</a>
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
