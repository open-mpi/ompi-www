<?
$subject_val = "[OMPI devel] shmem_collect32 does not work with nlong == 0";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 10 08:47:08 2014" -->
<!-- isoreceived="20140510124708" -->
<!-- sent="Sat, 10 May 2014 14:46:58 +0200" -->
<!-- isosent="20140510124658" -->
<!-- name="Bert Wesarg" -->
<!-- email="Bert.Wesarg_at_[hidden]" -->
<!-- subject="[OMPI devel] shmem_collect32 does not work with nlong == 0" -->
<!-- id="536E1FC2.5090903_at_tu-dresden.de" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] shmem_collect32 does not work with nlong == 0<br>
<strong>From:</strong> Bert Wesarg (<em>Bert.Wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-10 08:46:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14768.php">Bert Wesarg: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<li><strong>Previous message:</strong> <a href="14766.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14768.php">Bert Wesarg: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<li><strong>Reply:</strong> <a href="14768.php">Bert Wesarg: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15305.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I get a deadlock when using the shmem_collect32() routine and any of the 
<br>
non-root PEs pass 0 as the number of elements. It looks like the 
<br>
algorithm in _algorithm_central_collector() does use 0 as a special 
<br>
value, and thus does not break out of the loop. This is observable with 
<br>
1.8 and current trunk r31639. A small testcase is attached.
<br>
<p>Btw, I'm pretty confident, that this Open SHMEM implementation does not 
<br>
recognize global or static variables in shared libraries as symmetric 
<br>
objects. It is probably wise to note this somewhere to the users.
<br>
<p>Kind regards,
<br>
Bert Wesarg
<br>
<p>#include &lt;shmem.h&gt;
<br>
<p>int
<br>
main(int ac, char *av[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *src, *dest;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long *psync;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;start_pes(0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int pes = _num_pes();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int me = _my_pe();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;src = shmalloc(pes * sizeof(*src));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int pe = 0; pe &lt; pes; ++pe)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;src[pe] = me;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest = shmalloc(pes * sizeof(*dest));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;psync = shmalloc(_SHMEM_COLLECT_SYNC_SIZE * sizeof(*psync));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; _SHMEM_COLLECT_SYNC_SIZE; ++i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;psync[i] = _SHMEM_SYNC_VALUE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shmem_barrier_all();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shmem_collect32(dest,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;src,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;me == 0 ? 1 : 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, 0, pes,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;psync);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shfree(src);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shfree(dest);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shfree(psync);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#195;&#164;t Dresden
Zentrum f&#195;&#188;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: Bert.Wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14767/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14768.php">Bert Wesarg: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<li><strong>Previous message:</strong> <a href="14766.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14768.php">Bert Wesarg: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<li><strong>Reply:</strong> <a href="14768.php">Bert Wesarg: "Re: [OMPI devel] shmem_collect32 does not work with nlong == 0"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15305.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
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
