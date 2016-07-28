<?
$subject_val = "Re: [OMPI users] SIGV at MPI_Cart_sub";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 10 11:16:14 2012" -->
<!-- isoreceived="20120110161614" -->
<!-- sent="Tue, 10 Jan 2012 17:16:10 +0100" -->
<!-- isosent="20120110161610" -->
<!-- name="Anas Al-Trad" -->
<!-- email="anas.altrad_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGV at MPI_Cart_sub" -->
<!-- id="CA+H1izP57fha=HZqa6RX0FTQ=A39ou4qb6Xzoy=CWdNPf9Skrg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8B2F7BE2-4AEC-4444-BEF7-8153D8A1AF95_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGV at MPI_Cart_sub<br>
<strong>From:</strong> Anas Al-Trad (<em>anas.altrad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-10 11:16:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18122.php">Jeff Squyres: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Previous message:</strong> <a href="18120.php">Ralph Castain: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>In reply to:</strong> <a href="18120.php">Ralph Castain: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18122.php">Jeff Squyres: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Reply:</strong> <a href="18122.php">Jeff Squyres: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi Ralph, I changed the intel icc module from 12.1.0 to 11.1.069, the
<br>
previous default one used at a Neolith Cluster. I submitted the job and I
<br>
still waiting for the result. Here is the message of the segmentation fault:
<br>
<p>[n764:29867] *** Process received signal ***
<br>
[n764:29867] Signal: Floating point exception (8)
<br>
[n764:29867] Signal code: Integer divide-by-zero (1)
<br>
[n764:29867] Failing at address: 0x2ba640e74627
<br>
[n764:29867] [ 0] /lib64/libc.so.6 [0x2ba641e162d0]
<br>
[n764:29867] [ 1]
<br>
/software/mpi/openmpi/1.4.1/i101011/lib/libmpi.so.0(mca_topo_base_cart_coords+0x43)
<br>
[0x2ba640e74627]
<br>
[n764:29867] [ 2]
<br>
/software/mpi/openmpi/1.4.1/i101011/lib/libmpi.so.0(mca_topo_base_cart_sub+0x1d5)
<br>
[0x2ba640e74acd]
<br>
[n764:29867] [ 3]
<br>
/software/mpi/openmpi/1.4.1/i101011/lib/libmpi.so.0(MPI_Cart_sub+0x35)
<br>
[0x2ba640e472d9]
<br>
[n764:29867] [ 4]
<br>
/home/x_anaal/thesis/cimple/tst_chng_p/v5/r2/output.o(Compute_SUMMA1+0x226)
<br>
[0x4088da]
<br>
[n764:29867] [ 5]
<br>
/home/x_anaal/thesis/cimple/tst_chng_p/v5/r2/output.o(variant_run+0xb2)
<br>
[0x409058]
<br>
[n764:29867] [ 6]
<br>
/home/x_anaal/thesis/cimple/tst_chng_p/v5/r2/output.o(main+0xf90) [0x40eeba]
<br>
[n764:29867] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2ba641e03994]
<br>
[n764:29867] [ 8] /home/x_anaal/thesis/cimple/tst_chng_p/v5/r2/output.o
<br>
[0x403fd9]
<br>
[n764:29867] *** End of error message ***
<br>
<p>when I run my application, sometimes I get this error and sometimes it is
<br>
stuck in the middle.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18121/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18122.php">Jeff Squyres: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Previous message:</strong> <a href="18120.php">Ralph Castain: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>In reply to:</strong> <a href="18120.php">Ralph Castain: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18122.php">Jeff Squyres: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Reply:</strong> <a href="18122.php">Jeff Squyres: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
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
