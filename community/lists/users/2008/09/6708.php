<?
$subject_val = "Re: [OMPI users] where is mpif.h ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 00:15:54 2008" -->
<!-- isoreceived="20080924041554" -->
<!-- sent="Tue, 23 Sep 2008 21:15:50 -0700 (PDT)" -->
<!-- isosent="20080924041550" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="Re: [OMPI users] where is mpif.h ?" -->
<!-- id="722150.59171.qm_at_web34802.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1C7B1C96-FDE3-4042-9FFB-5D342B0167BB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] where is mpif.h ?<br>
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 00:15:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6709.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6707.php">Terry Frankcombe: "Re: [OMPI users] Configure and Build ok, but mpi module not	recognized?"</a>
<li><strong>In reply to:</strong> <a href="6706.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6712.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Reply:</strong> <a href="6712.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok now after i have made sure that my code acutally goes and includes the mpi.h from openmpi and not mpich, now I get really wierd errors. Below I will paste my mpic++ configurations from --showme and the errors i gert from running my code.
<br>
====================
<br>
[sjafer_at_DeepThought latest_cd++_timewarp]$ /opt/openmpi/1.2.7/bin/mpic++ --showme:compile
<br>
-I/opt/openmpi/1.2.7/include -pthread
<br>
====================
<br>
[sjafer_at_DeepThought latest_cd++_timewarp]$ /opt/openmpi/1.2.7/bin/mpic++ --showme:link
<br>
-pthread -L/opt/openmpi/1.2.7/lib -lmpi_cxx -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
====================
<br>
&#160;
<br>
&#160;
<br>
=====ERRORS===========
<br>
In file included from /usr/local/include/g++-3/stl_tree.h:57,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; from /usr/local/include/g++-3/map:31,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:35,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; from /opt/openmpi/1.2.7/include/mpi.h:1795,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; from CommPhyMPI.cc:36:
<br>
/usr/local/include/g++-3/stl_alloc.h: At top level:
<br>
/usr/local/include/g++-3/stl_alloc.h:142: template with C linkage
<br>
/usr/local/include/g++-3/stl_alloc.h:224: template with C linkage
<br>
/usr/local/include/g++-3/stl_alloc.h:243: template with C linkage
<br>
/usr/local/include/g++-3/stl_alloc.h:320: template with C linkage
<br>
/usr/local/include/g++-3/stl_alloc.h:729: template with C linkage
<br>
/usr/local/include/g++-3/stl_alloc.h:740: template with C linkage
<br>
/usr/local/include/g++-3/stl_alloc.h:746: template with C linkage
<br>
/usr/local/include/g++-3/stl_alloc.h: In method `allocator&lt;_Tp&gt;::allocator(const allocator&lt;_Tp1&gt; &amp;)':
<br>
/usr/local/include/g++-3/stl_alloc.h:746: template with C linkage
<br>
/usr/local/include/g++-3/stl_alloc.h: At top level:
<br>
/usr/local/include/g++-3/stl_alloc.h:778: template with C linkage
<br>
/usr/local/include/g++-3/stl_alloc.h: In function `bool operator ==(const allocator&lt;_Tp1&gt; &amp;, const allocator&lt;_T2&gt; &amp;)':
<br>
/usr/local/include/g++-3/stl_alloc.h:786: template with C linkage
<br>
/usr/local/include/g++-3/stl_alloc.h: In function `bool operator !=(const allocator&lt;_Tp1&gt; &amp;, const allocator&lt;_T2&gt; &amp;)':
<br>
/usr/local/include/g++-3/stl_alloc.h:792: template with C linkage
<br>
/usr/local/include/g++-3/stl_alloc.h: At top level:
<br>
/usr/local/include/g++-3/stl_alloc.h:804: template with C linkage
<br>
/usr/local/include/g++-3/stl_alloc.h:815: template with C linkage
<br>
/usr/local/include/g++-3/stl_alloc.h:824: template with C linkage
<br>
/usr/local/include/g++-3/stl_alloc.h: In method `__allocator&lt;_Tp,_Alloc&gt;::__allocator(const __allocator&lt;_Tp1,_Alloc&gt; &amp;)':
<br>
/usr/local/include/g++-3/stl_alloc.h:824: template with C linkage
<br>
/usr/local/include/g++-3/stl_alloc.h: At top level:
<br>
...
<br>
=======================
<br>
<p>--- On Tue, 9/23/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] where is mpif.h ?
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Tuesday, September 23, 2008, 2:13 PM
<br>
<p>See that FAQ entry I pointed to.
<br>
<p>${includedir} is the default &quot;include&quot; directory that came in from  
<br>
running OMPI's configure (defaults to $prefix/include).  Likewise for $ 
<br>
{libdir}; it's the &quot;library&quot; directory that came in from running 
<br>
<p>OMPI's configure (defaults to $prefix/lib).
<br>
<p><p>On Sep 23, 2008, at 4:41 PM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; In mpic++_wrapper-data.txt what do the following statments mean and  
</span><br>
<span class="quotelev1">&gt; where do they exactly point to??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; includedir=${includedir}
</span><br>
<span class="quotelev1">&gt; libdir=${libdir}
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Tue, 9/23/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] where is mpif.h ?
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, September 23, 2008, 5:11 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It actually is expected behavior.  Open MPI's wrappers do not
</span><br>
<span class="quotelev1">&gt; automatically add -I for /usr/include or -L for /usr/lib because these
</span><br>
<span class="quotelev1">&gt; directories are typically in the compiler's/linker's default
</span><br>
search
<br>
<span class="quotelev1">&gt; path, and having the wrapper compilers manually add them tends to
</span><br>
<span class="quotelev1">&gt; screw up search ordering.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can change the default behavior of the wrapper compilers, though
</span><br>
<span class="quotelev1">&gt; -- see this FAQ entry for details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 23, 2008, at 6:40 AM, Jed Brown wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue 2008-09-23 08:50, Simon Hammond wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yes, it should be there.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Shouldn't the path be automatically included by the mpif77  
</span><br>
<span class="quotelev1">&gt; wrapper?  I
</span><br>
<span class="quotelev2">&gt; &gt; ran into this problem when building BLACS (my default OpenMPI 1.2.7
</span><br>
<span class="quotelev2">&gt; &gt; lives in /usr, MPICH2 is at /opt/mpich2).  The build tries
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  $ /usr/bin/mpif90 -c -I. -fPIC  -Wno-unused-variable -g
</span><br>
<span class="quotelev2">&gt; &gt; bi_f77_mpi_attr_get.f
</span><br>
<span class="quotelev2">&gt; &gt;  Error: Can't open included file 'mpif.h'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; but this succeeds
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  $ /usr/bin/mpif90 -c -I. -I/usr/include -fPIC  -Wno-unused-variable
</span><br>
<span class="quotelev2">&gt; &gt; -g   bi_f77_mpi_attr_get.f
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and this works fine as well
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  $ /opt/mpich2/mpif90 -c -I. -fPIC -Wno-unused-variable -g
</span><br>
<span class="quotelev2">&gt; &gt; bi_f77_mpi_attr_get.f
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this the expected behavior?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jed
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6708/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6709.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6707.php">Terry Frankcombe: "Re: [OMPI users] Configure and Build ok, but mpi module not	recognized?"</a>
<li><strong>In reply to:</strong> <a href="6706.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6712.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Reply:</strong> <a href="6712.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
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
