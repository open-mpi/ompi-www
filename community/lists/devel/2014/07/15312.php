<?
$subject_val = "Re: [OMPI devel] SHMEM symmetric objects in shared libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 13:08:52 2014" -->
<!-- isoreceived="20140729170852" -->
<!-- sent="Tue, 29 Jul 2014 19:08:43 +0200" -->
<!-- isosent="20140729170843" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SHMEM symmetric objects in shared libraries" -->
<!-- id="53D7D51B.5070503_at_tu-dresden.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAG4F6z9V9hJ6Op0xmD59Pf9eumiEtwo1=Yv2GxTZdE8FPuYywQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SHMEM symmetric objects in shared libraries<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 13:08:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15313.php">Pritchard Jr., Howard: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Previous message:</strong> <a href="15311.php">Joshua Ladd: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>In reply to:</strong> <a href="15311.php">Joshua Ladd: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15313.php">Pritchard Jr., Howard: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/29/2014 06:57 PM, Joshua Ladd wrote:
<br>
<span class="quotelev1">&gt; Are you claiming that in the following test, the static variable &quot;val&quot; will
</span><br>
<span class="quotelev1">&gt; not be seen as a symmetric object?
</span><br>
<p>No.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;shmem.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main( int argc, char **argv){
</span><br>
<span class="quotelev1">&gt;      long my_pe, npes, master;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      start_pes(0);
</span><br>
<span class="quotelev1">&gt;      my_pe = shmem_my_pe();
</span><br>
<span class="quotelev1">&gt;      npes = shmem_n_pes();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      master = npes - 1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* only used on master */
</span><br>
<span class="quotelev1">&gt;     static long val = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if(my_pe != master ){
</span><br>
<span class="quotelev1">&gt;         shmem_long_fadd(&amp;val,1,master);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     shmem_barrier_all();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: bert.wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15312/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15313.php">Pritchard Jr., Howard: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Previous message:</strong> <a href="15311.php">Joshua Ladd: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>In reply to:</strong> <a href="15311.php">Joshua Ladd: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15313.php">Pritchard Jr., Howard: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
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
