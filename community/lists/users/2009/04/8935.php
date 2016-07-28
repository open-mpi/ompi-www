<?
$subject_val = "Re: [OMPI users] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 13:45:21 2009" -->
<!-- isoreceived="20090415174521" -->
<!-- sent="Wed, 15 Apr 2009 13:45:14 -0400" -->
<!-- isosent="20090415174514" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init" -->
<!-- id="E4BC5BD9-EFB0-44C9-B540-77A69401A97B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="554e24be0904112004x75602dfcr5d44d368a198536a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-15 13:45:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8936.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Previous message:</strong> <a href="8934.php">Jeff Squyres: "Re: [OMPI users] openmpi src rpm and message coalesce"</a>
<li><strong>In reply to:</strong> <a href="8878.php">Chris Walker: "Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Chris graciously gave me access to his machines to test this on.  With  
<br>
this access, I found the problem and scheduled the fix to be applied  
<br>
to the 1.3 series:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/attachment/ticket/1885">https://svn.open-mpi.org/trac/ompi/attachment/ticket/1885</a>
<br>
<p>Thanks Chris!
<br>
<p><p><p>On Apr 11, 2009, at 11:04 PM, Chris Walker wrote:
<br>
<p><span class="quotelev1">&gt; We're having this same problem with 1.3 and 1.3.1.  In our case, it
</span><br>
<span class="quotelev1">&gt; looks like mca_plm_lsf.so doesn't load libbat or liblsf:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_hero0101 openmpi]# ldd mca_plm_lsf.so
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002adbec183000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002adbec39b000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00002adbec59e000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002adbec822000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00002adbeca3c000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x0000003945c00000)
</span><br>
<span class="quotelev1">&gt; [root_at_hero0101 openmpi]#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_ess_lsf.so and mca_ras_lsf.so both do, however, e.g.,
</span><br>
<span class="quotelev1">&gt; [root_at_hero0101 openmpi]# ldd mca_ras_lsf.so
</span><br>
<span class="quotelev1">&gt;         libbat.so =&gt; /lsf/7.0/linux2.6-glibc2.3-x86_64/lib/libbat.so
</span><br>
<span class="quotelev1">&gt; (0x00002b86740ee000)
</span><br>
<span class="quotelev1">&gt;         liblsf.so =&gt; /lsf/7.0/linux2.6-glibc2.3-x86_64/lib/liblsf.so
</span><br>
<span class="quotelev1">&gt; (0x00002b8674384000)
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002b8674693000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002b86748ac000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00002b8674aaf000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002b8674d32000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00002b8674f4d000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x0000003945c00000)
</span><br>
<span class="quotelev1">&gt; [root_at_hero0101 openmpi]#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8936.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Previous message:</strong> <a href="8934.php">Jeff Squyres: "Re: [OMPI users] openmpi src rpm and message coalesce"</a>
<li><strong>In reply to:</strong> <a href="8878.php">Chris Walker: "Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
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
