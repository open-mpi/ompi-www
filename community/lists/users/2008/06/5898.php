<?
$subject_val = "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 09:11:19 2008" -->
<!-- isoreceived="20080617131119" -->
<!-- sent="Tue, 17 Jun 2008 09:08:58 -0400" -->
<!-- isosent="20080617130858" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gfortran bindings apparently not built on mac os leopard" -->
<!-- id="54FAF9C8-04E7-4B14-A7F3-2AEF74AFD64D_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C47C0944.5D51%vgweirs_at_sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 09:08:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5899.php">Jeff Squyres: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5897.php">Jeff Squyres: "Re: [OMPI users] RDMA-CM"</a>
<li><strong>In reply to:</strong> <a href="5890.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5913.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Reply:</strong> <a href="5913.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Reply:</strong> <a href="5922.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is pretty odd.
<br>
<p>What files do you see in $prefix/share/openmpi/mpi*txt?
<br>
<p>What do you see from:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;grep required_file $prefix/share/openmpi/mpi*txt
<br>
<p><p><p>On Jun 16, 2008, at 2:12 PM, Weirs, V Gregory wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dave Gunter:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to ./configure &#151;help, by default  &#151;enable-mpi-f77 and &#151; 
</span><br>
<span class="quotelev1">&gt; enable-mpi-f90 are set. Also, ompi_info (see output in run_output in  
</span><br>
<span class="quotelev1">&gt; the tarball) seems to indicate they are there. I rebuilt with them  
</span><br>
<span class="quotelev1">&gt; just to be sure, and got the same results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder:
</span><br>
<span class="quotelev1">&gt; In my run_output file, you can see results of &#145;which mpif77&#146; that  
</span><br>
<span class="quotelev1">&gt; shows I am using the version I built. (current is a symlink to 1.2.6- 
</span><br>
<span class="quotelev1">&gt; gcc4.0). In any case, I get the same results with the absolute path / 
</span><br>
<span class="quotelev1">&gt; usr/local/openmpi/1.2.6-4.0/bin/mpif77.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/16/08 11:04 AM, &quot;users-request_at_[hidden]&quot; &lt;users-request_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. Re: gfortran bindings apparently not built on mac os       
</span><br>
<span class="quotelev1">&gt; leopard
</span><br>
<span class="quotelev1">&gt;       (David Gunter)
</span><br>
<span class="quotelev1">&gt;    2. Re: gfortran bindings apparently not built on mac os       
</span><br>
<span class="quotelev1">&gt; leopard
</span><br>
<span class="quotelev1">&gt;       (Doug Reeder)
</span><br>
<span class="quotelev1">&gt;    3. Re: gfortran bindings apparently not built on mac os       
</span><br>
<span class="quotelev1">&gt; leopard
</span><br>
<span class="quotelev1">&gt;       (Doug Reeder)
</span><br>
<span class="quotelev1">&gt;    4. help me please, about Open MPI (Tony Smith)
</span><br>
<span class="quotelev1">&gt;    5. Re: help me please, about Open MPI (Andreas Sch?fer)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Mon, 16 Jun 2008 10:37:22 -0600
</span><br>
<span class="quotelev1">&gt; From: David Gunter &lt;dog_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] gfortran bindings apparently not built on
</span><br>
<span class="quotelev1">&gt;         mac os  leopard
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4683C284-4FEF-45CA-A2BC-8BE91A439485_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;windows-1252&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev1">&gt;         DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe you still must add &quot;--enable-f77&quot; and &quot;--enable-f90&quot; to the
</span><br>
<span class="quotelev1">&gt; OMPI configure line in addition to setting the FC and F77 env  
</span><br>
<span class="quotelev1">&gt; variables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -david
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Gunter
</span><br>
<span class="quotelev1">&gt; HPC-3: Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 16, 2008, at 10:25 AM, Weirs, V Gregory wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am having trouble building mpif77/mpif90 with gfortran on Mac OS
</span><br>
<span class="quotelev2">&gt; &gt; 10.5. Or maybe just running. The configure, make all, and make
</span><br>
<span class="quotelev2">&gt; &gt; install seemed to go just fine, finding my gfortran and apparently
</span><br>
<span class="quotelev2">&gt; &gt; using it, but the scripts mpif77 and mpif90 give the error that my
</span><br>
<span class="quotelev2">&gt; &gt; openmpi was not built with fortran bindings. Mpicc and mpicxx don?t
</span><br>
<span class="quotelev2">&gt; &gt; give this error.  Ompi_info says the f77 and f90 bindings were  
</span><br>
<span class="quotelev1">&gt; built.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I know that OS X 10.5 comes with openmpi mpicc and mpicxx installed,
</span><br>
<span class="quotelev2">&gt; &gt; but not fortran bindings, and I was careful to put the openmpi I
</span><br>
<span class="quotelev2">&gt; &gt; built first in the path.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Some run output (mpif77 ?version, ompi_info), config.log,
</span><br>
<span class="quotelev2">&gt; &gt; configure.log, make.out, make-install.out are in the attached  
</span><br>
<span class="quotelev1">&gt; tarball.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any clues?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Greg
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; V. Gregory Weirs
</span><br>
<span class="quotelev2">&gt; &gt; Sandia National Laboratories                vgweirs_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; P.O.Box 5800, MS 0378                        phone: 505 845 2032
</span><br>
<span class="quotelev2">&gt; &gt; Albuquerque, NM 87185-0378              fax: 505 284 0154
</span><br>
<span class="quotelev2">&gt; &gt; &lt;dig.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Mon, 16 Jun 2008 09:32:21 -0700
</span><br>
<span class="quotelev1">&gt; From: Doug Reeder &lt;dlr_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] gfortran bindings apparently not built on
</span><br>
<span class="quotelev1">&gt;         mac os  leopard
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;5047581C-F2E2-473B-8576-3E11F0D54DEA_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;windows-1252&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev1">&gt;         DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you use the absolute path names to run your mpif77 and mpif90 what
</span><br>
<span class="quotelev1">&gt; output do you get. In spite of the results from which mpif77, the
</span><br>
<span class="quotelev1">&gt; outputs from mpif77 and mpif90 look suspiciously like the outputs
</span><br>
<span class="quotelev1">&gt; from the apple supplied versions in /usr/bin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Jun 16, 2008, at 9:25 AM, Weirs, V Gregory wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am having trouble building mpif77/mpif90 with gfortran on Mac OS
</span><br>
<span class="quotelev2">&gt; &gt; 10.5. Or maybe just running. The configure, make all, and make
</span><br>
<span class="quotelev2">&gt; &gt; install seemed to go just fine, finding my gfortran and apparently
</span><br>
<span class="quotelev2">&gt; &gt; using it, but the scripts mpif77 and mpif90 give the error that my
</span><br>
<span class="quotelev2">&gt; &gt; openmpi was not built with fortran bindings. Mpicc and mpicxx don?t
</span><br>
<span class="quotelev2">&gt; &gt; give this error.  Ompi_info says the f77 and f90 bindings were  
</span><br>
<span class="quotelev1">&gt; built.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I know that OS X 10.5 comes with openmpi mpicc and mpicxx
</span><br>
<span class="quotelev2">&gt; &gt; installed, but not fortran bindings, and I was careful to put the
</span><br>
<span class="quotelev2">&gt; &gt; openmpi I built first in the path.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Some run output (mpif77 ?version, ompi_info), config.log,
</span><br>
<span class="quotelev2">&gt; &gt; configure.log, make.out, make-install.out are in the attached  
</span><br>
<span class="quotelev1">&gt; tarball.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any clues?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Greg
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; V. Gregory Weirs
</span><br>
<span class="quotelev2">&gt; &gt; Sandia National Laboratories                vgweirs_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; P.O.Box 5800, MS 0378                        phone: 505 845 2032
</span><br>
<span class="quotelev2">&gt; &gt; Albuquerque, NM 87185-0378              fax: 505 284 0154
</span><br>
<span class="quotelev2">&gt; &gt; &lt;dig.tar.gz&gt;
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
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Mon, 16 Jun 2008 09:42:55 -0700
</span><br>
<span class="quotelev1">&gt; From: Doug Reeder &lt;dlr_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] gfortran bindings apparently not built on
</span><br>
<span class="quotelev1">&gt;         mac os  leopard
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;08B5C06D-8B64-4189-ADAE-E9FBE6BE567F_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;windows-1252&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev1">&gt;         DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In your run_output file you don't appear to be using the openmpi
</span><br>
<span class="quotelev1">&gt; versions that you built. From your make-install.out file it looks
</span><br>
<span class="quotelev1">&gt; like your versions are in /usr/local/openmpi/1.2.6-gcc4.0/bin. You
</span><br>
<span class="quotelev1">&gt; need to use that absolute path or prepend that path to your PATH
</span><br>
<span class="quotelev1">&gt; environment variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Jun 16, 2008, at 9:25 AM, Weirs, V Gregory wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am having trouble building mpif77/mpif90 with gfortran on Mac OS
</span><br>
<span class="quotelev2">&gt; &gt; 10.5. Or maybe just running. The configure, make all, and make
</span><br>
<span class="quotelev2">&gt; &gt; install seemed to go just fine, finding my gfortran and apparently
</span><br>
<span class="quotelev2">&gt; &gt; using it, but the scripts mpif77 and mpif90 give the error that my
</span><br>
<span class="quotelev2">&gt; &gt; openmpi was not built with fortran bindings. Mpicc and mpicxx don?t
</span><br>
<span class="quotelev2">&gt; &gt; give this error.  Ompi_info says the f77 and f90 bindings were  
</span><br>
<span class="quotelev1">&gt; built.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I know that OS X 10.5 comes with openmpi mpicc and mpicxx
</span><br>
<span class="quotelev2">&gt; &gt; installed, but not fortran bindings, and I was careful to put the
</span><br>
<span class="quotelev2">&gt; &gt; openmpi I built first in the path.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Some run output (mpif77 ?version, ompi_info), config.log,
</span><br>
<span class="quotelev2">&gt; &gt; configure.log, make.out, make-install.out are in the attached  
</span><br>
<span class="quotelev1">&gt; tarball.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any clues?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Greg
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; V. Gregory Weirs
</span><br>
<span class="quotelev2">&gt; &gt; Sandia National Laboratories                vgweirs_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; P.O.Box 5800, MS 0378                        phone: 505 845 2032
</span><br>
<span class="quotelev2">&gt; &gt; Albuquerque, NM 87185-0378              fax: 505 284 0154
</span><br>
<span class="quotelev2">&gt; &gt; &lt;dig.tar.gz&gt;
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
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Mon, 16 Jun 2008 12:51:31 -0400
</span><br>
<span class="quotelev1">&gt; From: Tony Smith &lt;dtustudy8_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] help me please, about Open MPI
</span><br>
<span class="quotelev1">&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;BAY104-W32BC5D00DA99730856FD48FDA90_at_phx.gbl&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;windows-1252&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Sir:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to install Open MPI on a cluster that has been installed  
</span><br>
<span class="quotelev1">&gt; with mpich-
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gm  MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have followed the steps on your website.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can compile and run the Hello_c application correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, how can I make sure that the application is run by Open MPI not  
</span><br>
<span class="quotelev1">&gt; by mpich-
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gm MPI ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have changed PATH and LD_LIBRARY_PATH:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I deleted /opt/mpich-gm/bin from PATH and added
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /ptmp/myname/openmpi123/ompi123_install/bin/ into PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/ptmp/myname/openmpi123/ompi123_install/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then, I got
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash-3.00$ which mpirun
</span><br>
<span class="quotelev1">&gt; /ptmp/myname/openmpi123/ompi123_install/bin/mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my job script , I used
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;time mpirun -np 16  /ptmp/jxding/openmpi123/openmpi-1.2.3/examples/ 
</span><br>
<span class="quotelev1">&gt; hello_c&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I added &quot;which mpirun&quot; in my job script, and then submited my  
</span><br>
<span class="quotelev1">&gt; job to the
</span><br>
<span class="quotelev1">&gt; cluster , I got :
</span><br>
<span class="quotelev1">&gt; ====================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/mpich-gm/bin/mpirun
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; 0.117u 0.165s 0:09.54 2.8%      0+0k 0+0io 0pf+0w
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ====================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So , it means that the application is still using MPICH-GM not Open  
</span><br>
<span class="quotelev1">&gt; MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would you please help me with that ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tony
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; June 16  2008
</span><br>
<span class="quotelev1">&gt; _________________________________________________________________
</span><br>
<span class="quotelev1">&gt; Now you can invite friends from Facebook and other groups to join  
</span><br>
<span class="quotelev1">&gt; you on Windows Live? Messenger. Add now.
</span><br>
<span class="quotelev1">&gt; <a href="https://www.invite2messenger.net/im/?source=TXT_EML_WLH_AddNow_Now">https://www.invite2messenger.net/im/?source=TXT_EML_WLH_AddNow_Now</a>
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 5
</span><br>
<span class="quotelev1">&gt; Date: Mon, 16 Jun 2008 19:05:06 +0200
</span><br>
<span class="quotelev1">&gt; From: Andreas Sch?fer &lt;gentryx_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] help me please, about Open MPI
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;20080616170506.GB7069_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Mister Smith,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for installing Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12:51 Mon 16 Jun     , Tony Smith wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have changed PATH and LD_LIBRARY_PATH:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please be aware that you have to make those changes within your job
</span><br>
<span class="quotelev1">&gt; script. Otherwise they will only affect your local shell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; But, how can I make sure that the application is run by Open MPI  
</span><br>
<span class="quotelev1">&gt; not by mpich-
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could enforce a certain mpirun by using its absolute path, e.g
</span><br>
<span class="quotelev1">&gt; &quot;/ptmp/myname/openmpi123/ompi123_install/bin/mpirun foo&quot; instead of
</span><br>
<span class="quotelev1">&gt; just &quot;mpirun foo&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I deleted /opt/mpich-gm/bin from PATH and added
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should not need to delete, just add in front of MPICH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Would you please help me with that ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I utterly hope I just did.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most sincerely yours ;-)
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt; Andreas Sch?fer
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit?t Jena, Germany
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
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev1">&gt; Name: not available
</span><br>
<span class="quotelev1">&gt; Type: application/pgp-signature
</span><br>
<span class="quotelev1">&gt; Size: 197 bytes
</span><br>
<span class="quotelev1">&gt; Desc: not available
</span><br>
<span class="quotelev1">&gt; URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20080616/ab34ce85/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20080616/ab34ce85/attachment.bin</a> 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 923, Issue 4
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; V. Gregory Weirs
</span><br>
<span class="quotelev1">&gt; Sandia National Laboratories                vgweirs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; P.O.Box 5800, MS 0378                        phone: 505 845 2032
</span><br>
<span class="quotelev1">&gt; Albuquerque, NM 87185-0378              fax: 505 284 0154
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
<li><strong>Next message:</strong> <a href="5899.php">Jeff Squyres: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5897.php">Jeff Squyres: "Re: [OMPI users] RDMA-CM"</a>
<li><strong>In reply to:</strong> <a href="5890.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5913.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Reply:</strong> <a href="5913.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Reply:</strong> <a href="5922.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
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
