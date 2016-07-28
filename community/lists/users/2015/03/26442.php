<?
$subject_val = "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 08:24:00 2015" -->
<!-- isoreceived="20150309122400" -->
<!-- sent="Mon, 9 Mar 2015 08:24:15 -0400" -->
<!-- isosent="20150309122415" -->
<!-- name="Aur&#195;&#169;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015" -->
<!-- id="A9A9B190-9CEE-4525-8468-1F33D3BA98F1_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CADTPv6Ew8+2f6oZr23CrNm7H=-f2w04pja+Q5JfMVkaQBeivfQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015<br>
<strong>From:</strong> Aur&#195;&#169;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-09 08:24:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26443.php">Aulwes, Rob: "Re: [OMPI users] GPUDirect with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="26441.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>In reply to:</strong> <a href="26436.php">Irena Johnson: "[OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Irena,
<br>
<p>This is a known problem in BLACS. I have pushed a patch to the scalapack devs and I believe the latest version (the one that is integrated into scalapack 2.0) does include the fix.
<br>
<p>Aurelien
<br>
<pre>
--
Aur&#195;&#169;lien Bouteiller ~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
&gt; Le 6 mars 2015 &#195;&#160; 09:31, Irena Johnson &lt;ijohnson_at_[hidden]&gt; a &#195;&#169;crit :
&gt; 
&gt; Hello,
&gt; 
&gt; I am trying to build BLACS for openmpi-1.8.4  and intel/2015.u1
&gt; 
&gt; The compilation was successful, but I am getting the following error when building the examples:
&gt; 
&gt; 
&gt; ( cd TESTING ; make  )
&gt; make[1]: Entering directory `/l/sunfire28/ijohnson/BLACS/TESTING'
&gt; mpif77   -o /pfs/tmp/ijohnson/BLACS/TESTING/EXE/xFbtest_MPI-LINUX-0 blacstest.o btprim_MPI.o tools.o /pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a /pfs/tmp/ijohnson/BLACS/LIB/blacs_MPI-LINUX-0.a /pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a
&gt; blacstest.o: In function `MAIN__':
&gt; blacstest.f:(.text+0x8e): undefined reference to `blacs_pinfo_'
&gt; blacstest.o: In function `runtests_':
&gt; blacstest.f:(.text+0x1236): undefined reference to `blacs_pinfo_'
&gt; blacstest.o: In function `auxtest_':
&gt; blacstest.f:(.text+0x7cd9): undefined reference to `blacs_pinfo_'
&gt; blacstest.f:(.text+0xb28b): undefined reference to `blacs_pinfo_'
&gt; /pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a(Cblacs_pinfo.o): In function `Cblacs_pinfo':
&gt; blacs_pinfo_.c:(.text+0x73): undefined reference to `bi_f77_get_constants__'
&gt; blacs_pinfo_.c:(.text+0xaa): undefined reference to `bi_f77_init__'
&gt; make[1]: *** [/pfs/tmp/ijohnson/BLACS/TESTING/EXE/xFbtest_MPI-LINUX-0] Error 1
&gt; make[1]: Leaving directory `/l/sunfire28/ijohnson/BLACS/TESTING'
&gt; make: *** [tester] Error 2
&gt; 
&gt; 
&gt; I have attached Bmake.inc and log.make
&gt; 
&gt; Please advise. Thank you,
&gt; 
&gt; --
&gt; Irena
&gt; &lt;Bmake.inc&gt;&lt;log.make&gt;_______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26436.php">http://www.open-mpi.org/community/lists/users/2015/03/26436.php</a>
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26442/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26442/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26443.php">Aulwes, Rob: "Re: [OMPI users] GPUDirect with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="26441.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>In reply to:</strong> <a href="26436.php">Irena Johnson: "[OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
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
