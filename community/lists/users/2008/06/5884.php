<?
$subject_val = "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 12:37:34 2008" -->
<!-- isoreceived="20080616163734" -->
<!-- sent="Mon, 16 Jun 2008 10:37:22 -0600" -->
<!-- isosent="20080616163722" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gfortran bindings apparently not built on mac os leopard" -->
<!-- id="4683C284-4FEF-45CA-A2BC-8BE91A439485_at_lanl.gov" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C47BF017.5D40%vgweirs_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] gfortran bindings apparently not built on mac os leopard<br>
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-16 12:37:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5885.php">Doug Reeder: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Previous message:</strong> <a href="5883.php">Weirs, V Gregory: "[OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>In reply to:</strong> <a href="5883.php">Weirs, V Gregory: "[OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5885.php">Doug Reeder: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe you still must add &quot;--enable-f77&quot; and &quot;--enable-f90&quot; to the  
<br>
OMPI configure line in addition to setting the FC and F77 env variables.
<br>
<p>-david
<br>
<pre>
--
David Gunter
HPC-3: Parallel Tools Team
Los Alamos National Laboratory
On Jun 16, 2008, at 10:25 AM, Weirs, V Gregory wrote:
&gt;
&gt;
&gt; I am having trouble building mpif77/mpif90 with gfortran on Mac OS  
&gt; 10.5. Or maybe just running. The configure, make all, and make  
&gt; install seemed to go just fine, finding my gfortran and apparently  
&gt; using it, but the scripts mpif77 and mpif90 give the error that my  
&gt; openmpi was not built with fortran bindings. Mpicc and mpicxx don&#146;t  
&gt; give this error.  Ompi_info says the f77 and f90 bindings were built.
&gt;
&gt; I know that OS X 10.5 comes with openmpi mpicc and mpicxx installed,  
&gt; but not fortran bindings, and I was careful to put the openmpi I  
&gt; built first in the path.
&gt;
&gt; Some run output (mpif77 &#151;version, ompi_info), config.log,  
&gt; configure.log, make.out, make-install.out are in the attached tarball.
&gt;
&gt; Any clues?
&gt;
&gt; Thanks,
&gt; Greg
&gt;
&gt;
&gt; -- 
&gt; V. Gregory Weirs
&gt; Sandia National Laboratories                vgweirs_at_[hidden]
&gt; P.O.Box 5800, MS 0378                        phone: 505 845 2032
&gt; Albuquerque, NM 87185-0378              fax: 505 284 0154
&gt; &lt;dig.tar.gz&gt;_______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5884/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5885.php">Doug Reeder: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Previous message:</strong> <a href="5883.php">Weirs, V Gregory: "[OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>In reply to:</strong> <a href="5883.php">Weirs, V Gregory: "[OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5885.php">Doug Reeder: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
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
