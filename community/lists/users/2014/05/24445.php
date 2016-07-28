<?
$subject_val = "Re: [OMPI users] openmpi configuration error?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 15:08:39 2014" -->
<!-- isoreceived="20140521190839" -->
<!-- sent="Wed, 21 May 2014 15:08:33 -0400" -->
<!-- isosent="20140521190833" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi configuration error?" -->
<!-- id="537CF9B1.7090800_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOiaXW1H8R5RJPaQfpw2RTwS0hOnopLRpy+XcToTFMaXz9p_kg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi configuration error?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-21 15:08:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24446.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24444.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24444.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24446.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24446.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ben
<br>
<p>My guess is that your sys admins may have built NetCDF
<br>
with parallel support, pnetcdf, and the latter with OpenMPI,
<br>
which could explain the dependency.
<br>
Ideally, they should have built it again with the latest default OpenMPI 
<br>
(1.6.5?)
<br>
<p>Check if there is a NetCDF module that either doesn't have any
<br>
dependence on MPI, or depends on the current Open MPI that
<br>
you are using (1.6.5 I think).
<br>
A  'module show netcdf/bla/bla'
<br>
on the available netcdf modules will tell.
<br>
<p>If the application code is old as you said, it probably doesn't use
<br>
any pnetcdf. In addition, it should work even with NetCDF 3.X.Y,
<br>
which probably doesn't have any pnetcdf built in.
<br>
Newer netcdf (4.Z.W &gt; 4.1.3) should also work, and in this case
<br>
pick one that requires the default OpenMPI, if available.
<br>
<p>Just out of curiosity, besides netcdf/4.1.3, did you load openmpi/1.6.5?
<br>
Somehow the openmpi/1.6.5 should have been marked
<br>
to conflict with 1.4.4.
<br>
Is it?
<br>
Anyway, you may want to do a 'which mpiexec' to see which one is
<br>
taking precedence in your environment (1.6.5 or 1.4.4)
<br>
Probably 1.6.5.
<br>
<p>Does the code work now, or does it continue to fail?
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p><p>On 05/21/2014 02:36 PM, Ben Lash wrote:
<br>
<span class="quotelev1">&gt; Yep, there is is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bl10_at_login2 USlogsminus10]$ module show netcdf/4.1.3
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; /opt/apps/modulefiles/netcdf/4.1.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module           load openmpi/1.4.4-intel
</span><br>
<span class="quotelev1">&gt; prepend-path     PATH
</span><br>
<span class="quotelev1">&gt; /opt/apps/netcdf/4.1.3/bin:/opt/apps/netcdf/4.1.3/deps/hdf5/1.8.7/bin
</span><br>
<span class="quotelev1">&gt; prepend-path     LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /opt/apps/netcdf/4.1.3/lib:/opt/apps/netcdf/4.1.3/deps/hdf5/1.8.7/lib:/opt/apps/netcdf/4.1.3/deps/szip/2.1/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; prepend-path     MANPATH /opt/apps/netcdf/4.1.3/share/man
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 21, 2014 at 1:34 PM, Douglas L Reeder &lt;dlr1_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dlr1_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ben,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The netcdf/4.1.3 module maybe loading the openmpi/1.4.4 module. Can
</span><br>
<span class="quotelev1">&gt;     you do module show the netcdf module file to to see if there is a
</span><br>
<span class="quotelev1">&gt;     module load openmpi command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Doug Reeder
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On May 21, 2014, at 12:23 PM, Ben Lash &lt;bl10_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:bl10_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I just wanted to follow up for anyone else who got a similar
</span><br>
<span class="quotelev2">&gt;&gt;     problem - module load netcdf/4.1.3 *also* loaded openmpi/1.4.4.
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;<a href="http://1.4.4./">http://1.4.4./</a>&gt; Don't ask me why. My code doesn't seem to fail as
</span><br>
<span class="quotelev2">&gt;&gt;     gracefully but otherwise works now. Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Sat, May 17, 2014 at 6:02 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Ditto -- Lmod looks pretty cool.  Thanks for the heads up.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On May 16, 2014, at 6:23 PM, Douglas L Reeder
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;dlr1_at_[hidden] &lt;mailto:dlr1_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Maxime,
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; I was unaware of Lmod. Thanks for bringing it to my attention.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Doug
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; On May 16, 2014, at 4:07 PM, Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;maxime.boissonneault_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; Instead of using the outdated and not maintained Module
</span><br>
<span class="quotelev2">&gt;&gt;         environment, why not use Lmod :
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="https://www.tacc.utexas.edu/tacc-projects/lmod">https://www.tacc.utexas.edu/tacc-projects/lmod</a>
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; It is a drop-in replacement for Module environment that
</span><br>
<span class="quotelev2">&gt;&gt;         supports all of their features and much, much more, such as :
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; - module hierarchies
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; - module properties and color highlighting (we use it to
</span><br>
<span class="quotelev2">&gt;&gt;         higlight bioinformatic modules or tools for example)
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; - module caching (very useful for a parallel filesystem
</span><br>
<span class="quotelev2">&gt;&gt;         with tons of modules)
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; - path priorities (useful to make sure personal modules
</span><br>
<span class="quotelev2">&gt;&gt;         take precendence over system modules)
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; - export module tree to json
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; It works like a charm, understand both TCL and Lua modules
</span><br>
<span class="quotelev2">&gt;&gt;         and is actively developped and debugged. There are litteraly
</span><br>
<span class="quotelev2">&gt;&gt;         new features every month or so. If it does not do what you
</span><br>
<span class="quotelev2">&gt;&gt;         want, odds are that the developper will add it shortly (I've
</span><br>
<span class="quotelev2">&gt;&gt;         had it happen).
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; Maxime
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; Le 2014-05-16 17:58, Douglas L Reeder a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; Ben,
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; You might want to use module (source forge) to manage
</span><br>
<span class="quotelev2">&gt;&gt;         paths to different mpi implementations. It is fairly easy to
</span><br>
<span class="quotelev2">&gt;&gt;         set up and very robust for this type of problem. You would
</span><br>
<span class="quotelev2">&gt;&gt;         remove contentious application paths from you standard PATH
</span><br>
<span class="quotelev2">&gt;&gt;         and then use module to switch them in and out as needed.
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; On May 16, 2014, at 3:39 PM, Ben Lash &lt;bl10_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:bl10_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &gt;&gt;&gt;&gt; My cluster has just upgraded to a new version of MPI, and
</span><br>
<span class="quotelev2">&gt;&gt;         I'm using an old one. It seems that I'm having trouble
</span><br>
<span class="quotelev2">&gt;&gt;         compiling due to the compiler wrapper file moving (full error
</span><br>
<span class="quotelev2">&gt;&gt;         here: <a href="http://pastebin.com/EmwRvCd9">http://pastebin.com/EmwRvCd9</a>)
</span><br>
<span class="quotelev2">&gt;&gt;         &gt;&gt;&gt;&gt; &quot;Cannot open configuration file
</span><br>
<span class="quotelev2">&gt;&gt;         /opt/apps/openmpi/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &gt;&gt;&gt;&gt; I've found the file on the cluster at
</span><br>
<span class="quotelev2">&gt;&gt;          /opt/apps/openmpi/retired/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt;         &gt;&gt;&gt;&gt; How do I tell the old mpi wrapper where this file is?
</span><br>
<span class="quotelev2">&gt;&gt;         &gt;&gt;&gt;&gt; I've already corrected one link to mpich -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /opt/apps/openmpi/retired/1.4.4-intel/, which is in the
</span><br>
<span class="quotelev2">&gt;&gt;         software I'm trying to recompile's lib folder
</span><br>
<span class="quotelev2">&gt;&gt;         (/home/bl10/CMAQv5.0.1/lib/x86_64/ifort). Thanks for any
</span><br>
<span class="quotelev2">&gt;&gt;         ideas. I also tried changing $pkgdatadir based on what I read
</span><br>
<span class="quotelev2">&gt;&gt;         here:
</span><br>
<span class="quotelev2">&gt;&gt;         &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags">http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;         &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &gt;&gt;&gt;&gt; --Ben L
</span><br>
<span class="quotelev2">&gt;&gt;         &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         &gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;         &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; ---------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         --
</span><br>
<span class="quotelev2">&gt;&gt;         Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;         jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --
</span><br>
<span class="quotelev2">&gt;&gt;     --Ben L
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; --Ben L
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24446.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24444.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24444.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24446.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24446.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
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
