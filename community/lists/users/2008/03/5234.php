<?
$subject_val = "Re: [OMPI users] Begginers question: why does this program hangs?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 10:32:24 2008" -->
<!-- isoreceived="20080318143224" -->
<!-- sent="Tue, 18 Mar 2008 10:32:14 -0400" -->
<!-- isosent="20080318143214" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Begginers question: why does this program hangs?" -->
<!-- id="F488D31B-9E52-4AFD-A307-AB2D7718880E_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080318114828.GA12059_at_wintermute" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 10:32:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5235.php">George Bosilca: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>Previous message:</strong> <a href="5233.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>In reply to:</strong> <a href="5227.php">Andreas Sch&#228;fer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5236.php">Jeff Squyres: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Reply:</strong> <a href="5236.php">Jeff Squyres: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff hinted the real problem in his email. Even if the program use the  
<br>
correct MPI functions, it is not 100% correct. It might pass in some  
<br>
situations, but can lead to fake &quot;deadlocks&quot; in others. The problem  
<br>
come from the flow control. If the messages are small (which is the  
<br>
case in the test example), Open MPI will send them eagerly. Without a  
<br>
flow control, these messages will be buffered by the receiver, which  
<br>
will exhaust the memory on the receiver. Once this happens, some of  
<br>
the messages may get dropped, but the most visible result, is that the  
<br>
progress will happens very (VERY) slowly.
<br>
<p>Adding a MPI_Barrier every 100 iterations will solve the problem.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>PS: A very similar problem was discussed on the mailing list few days  
<br>
ago. Please read the thread to see a more detailed explanation, as  
<br>
well as another solution to solve it.
<br>
<p>On Mar 18, 2008, at 7:48 AM, Andreas Sch&#228;fer wrote:
<br>
<p><span class="quotelev1">&gt; OK, this is strange. I've rerun the test and got it to block,
</span><br>
<span class="quotelev1">&gt; too. Although repeated tests show that those are rare (sometimes the
</span><br>
<span class="quotelev1">&gt; program runs smoothly without blocking, but in about 30% of the cases
</span><br>
<span class="quotelev1">&gt; it hangs just like you said).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08:11 Tue 18 Mar     , Giovani Faccin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm using openmpi-1.2.5. It was installed using my distro's  
</span><br>
<span class="quotelev2">&gt;&gt; (Gentoo) default package:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sys-cluster/openmpi-1.2.5  USE=&quot;fortran ipv6 -debug -heterogeneous - 
</span><br>
<span class="quotelev2">&gt;&gt; nocxx -pbs -romio -smp -threads&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just like me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached gdb to all three processes. On rank 0 I get the
</span><br>
<span class="quotelev1">&gt; following backtrace:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00002ada849b3f16 in mca_btl_sm_component_progress ()
</span><br>
<span class="quotelev1">&gt;   from /usr/lib64/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #1  0x00002ada845a71da in mca_bml_r2_progress () from /usr/lib64/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #2  0x00002ada7e6fbbea in opal_progress () from /usr/lib64/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00002ada8439a9a5 in mca_pml_ob1_recv () from /usr/lib64/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #4  0x00002ada7e2570a8 in PMPI_Recv () from /usr/lib64/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #5  0x000000000040c9ae in MPI::Comm::Recv ()
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000409607 in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On rank 1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00002baa6869bcc0 in mca_btl_sm_send () from /usr/lib64/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #1  0x00002baa6808a93d in mca_pml_ob1_send_request_start_copy ()
</span><br>
<span class="quotelev1">&gt;   from /usr/lib64/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #2  0x00002baa680855f6 in mca_pml_ob1_send () from /usr/lib64/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #3  0x00002baa61f43182 in PMPI_Send () from /usr/lib64/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x000000000040ca04 in MPI::Comm::Send ()
</span><br>
<span class="quotelev1">&gt; #5  0x0000000000409700 in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On rank 2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00002b933d555ac7 in sched_yield () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00002b9341efe775 in mca_pml_ob1_send () from /usr/lib64/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #2  0x00002b933bdbc182 in PMPI_Send () from /usr/lib64/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x000000000040ca04 in MPI::Comm::Send ()
</span><br>
<span class="quotelev1">&gt; #4  0x0000000000409700 in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone got a clue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev1">&gt; I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (\___/)
</span><br>
<span class="quotelev1">&gt; (+'.'+)
</span><br>
<span class="quotelev1">&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev1">&gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev1">&gt; signature to help him gain world domination!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5234/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5235.php">George Bosilca: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>Previous message:</strong> <a href="5233.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>In reply to:</strong> <a href="5227.php">Andreas Sch&#228;fer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5236.php">Jeff Squyres: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Reply:</strong> <a href="5236.php">Jeff Squyres: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
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
