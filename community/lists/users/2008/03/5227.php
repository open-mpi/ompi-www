<?
$subject_val = "Re: [OMPI users] Begginers question: why does this program hangs?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 07:48:59 2008" -->
<!-- isoreceived="20080318114859" -->
<!-- sent="Tue, 18 Mar 2008 12:48:28 +0100" -->
<!-- isosent="20080318114828" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Begginers question: why does this program hangs?" -->
<!-- id="20080318114828.GA12059_at_wintermute" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="718308.55144.qm_at_web33108.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Begginers question: why does this program hangs?<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 07:48:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5228.php">Mark Kosmowski: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>Previous message:</strong> <a href="5226.php">Jeff Squyres: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>In reply to:</strong> <a href="5223.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5234.php">George Bosilca: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Reply:</strong> <a href="5234.php">George Bosilca: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, this is strange. I've rerun the test and got it to block,
<br>
too. Although repeated tests show that those are rare (sometimes the
<br>
program runs smoothly without blocking, but in about 30% of the cases
<br>
it hangs just like you said).
<br>
<p>On 08:11 Tue 18 Mar     , Giovani Faccin wrote:
<br>
<span class="quotelev1">&gt; I'm using openmpi-1.2.5. It was installed using my distro's (Gentoo) default package:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  sys-cluster/openmpi-1.2.5  USE=&quot;fortran ipv6 -debug -heterogeneous -nocxx -pbs -romio -smp -threads&quot;
</span><br>
<p>Just like me.
<br>
<p>I've attached gdb to all three processes. On rank 0 I get the
<br>
following backtrace:
<br>
<p>(gdb) bt
<br>
#0  0x00002ada849b3f16 in mca_btl_sm_component_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/lib64/openmpi/mca_btl_sm.so
<br>
#1  0x00002ada845a71da in mca_bml_r2_progress () from /usr/lib64/openmpi/mca_bml_r2.so
<br>
#2  0x00002ada7e6fbbea in opal_progress () from /usr/lib64/libopen-pal.so.0
<br>
#3  0x00002ada8439a9a5 in mca_pml_ob1_recv () from /usr/lib64/openmpi/mca_pml_ob1.so
<br>
#4  0x00002ada7e2570a8 in PMPI_Recv () from /usr/lib64/libmpi.so.0
<br>
#5  0x000000000040c9ae in MPI::Comm::Recv ()
<br>
#6  0x0000000000409607 in main ()
<br>
<p>On rank 1:
<br>
<p>(gdb) bt
<br>
#0  0x00002baa6869bcc0 in mca_btl_sm_send () from /usr/lib64/openmpi/mca_btl_sm.so
<br>
#1  0x00002baa6808a93d in mca_pml_ob1_send_request_start_copy ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/lib64/openmpi/mca_pml_ob1.so
<br>
#2  0x00002baa680855f6 in mca_pml_ob1_send () from /usr/lib64/openmpi/mca_pml_ob1.so
<br>
#3  0x00002baa61f43182 in PMPI_Send () from /usr/lib64/libmpi.so.0
<br>
#4  0x000000000040ca04 in MPI::Comm::Send ()
<br>
#5  0x0000000000409700 in main ()
<br>
<p>On rank 2:
<br>
<p>(gdb) bt
<br>
#0  0x00002b933d555ac7 in sched_yield () from /lib/libc.so.6
<br>
#1  0x00002b9341efe775 in mca_pml_ob1_send () from /usr/lib64/openmpi/mca_pml_ob1.so
<br>
#2  0x00002b933bdbc182 in PMPI_Send () from /usr/lib64/libmpi.so.0
<br>
#3  0x000000000040ca04 in MPI::Comm::Send ()
<br>
#4  0x0000000000409700 in main ()
<br>
<p>Anyone got a clue?
<br>
<p><p><pre>
-- 
============================================
Andreas Sch&#228;fer
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
PGP/GPG key via keyserver
I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
============================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5227/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5228.php">Mark Kosmowski: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>Previous message:</strong> <a href="5226.php">Jeff Squyres: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>In reply to:</strong> <a href="5223.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5234.php">George Bosilca: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Reply:</strong> <a href="5234.php">George Bosilca: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
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
