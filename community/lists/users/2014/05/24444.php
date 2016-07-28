<?
$subject_val = "Re: [OMPI users] openmpi configuration error?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 14:37:13 2014" -->
<!-- isoreceived="20140521183713" -->
<!-- sent="Wed, 21 May 2014 13:36:53 -0500" -->
<!-- isosent="20140521183653" -->
<!-- name="Ben Lash" -->
<!-- email="bl10_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi configuration error?" -->
<!-- id="CAOiaXW1H8R5RJPaQfpw2RTwS0hOnopLRpy+XcToTFMaXz9p_kg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9B0F8411-5818-4633-82AE-E3ACF88FF26B_at_centurylink.net" -->
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
<strong>From:</strong> Ben Lash (<em>bl10_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-21 14:36:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24445.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24443.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24443.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24445.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24445.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep, there is is.
<br>
<p>[bl10_at_login2 USlogsminus10]$ module show netcdf/4.1.3
<br>
-------------------------------------------------------------------
<br>
/opt/apps/modulefiles/netcdf/4.1.3:
<br>
<p>module           load openmpi/1.4.4-intel
<br>
prepend-path     PATH
<br>
/opt/apps/netcdf/4.1.3/bin:/opt/apps/netcdf/4.1.3/deps/hdf5/1.8.7/bin
<br>
prepend-path     LD_LIBRARY_PATH
<br>
/opt/apps/netcdf/4.1.3/lib:/opt/apps/netcdf/4.1.3/deps/hdf5/1.8.7/lib:/opt/apps/netcdf/4.1.3/deps/szip/2.1/lib
<br>
prepend-path     MANPATH /opt/apps/netcdf/4.1.3/share/man
<br>
-------------------------------------------------------------------
<br>
<p><p><p>On Wed, May 21, 2014 at 1:34 PM, Douglas L Reeder &lt;dlr1_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Ben,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The netcdf/4.1.3 module maybe loading the openmpi/1.4.4 module. Can you do
</span><br>
<span class="quotelev1">&gt; module show the netcdf module file to to see if there is a module load
</span><br>
<span class="quotelev1">&gt; openmpi command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 21, 2014, at 12:23 PM, Ben Lash &lt;bl10_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just wanted to follow up for anyone else who got a similar problem -
</span><br>
<span class="quotelev1">&gt; module load netcdf/4.1.3 *also* loaded openmpi/1.4.4. Don't ask me why.
</span><br>
<span class="quotelev1">&gt; My code doesn't seem to fail as gracefully but otherwise works now. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, May 17, 2014 at 6:02 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ditto -- Lmod looks pretty cool.  Thanks for the heads up.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 16, 2014, at 6:23 PM, Douglas L Reeder &lt;dlr1_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Maxime,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I was unaware of Lmod. Thanks for bringing it to my attention.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Doug
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On May 16, 2014, at 4:07 PM, Maxime Boissonneault &lt;
</span><br>
<span class="quotelev2">&gt;&gt; maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Instead of using the outdated and not maintained Module environment,
</span><br>
<span class="quotelev2">&gt;&gt; why not use Lmod : <a href="https://www.tacc.utexas.edu/tacc-projects/lmod">https://www.tacc.utexas.edu/tacc-projects/lmod</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; It is a drop-in replacement for Module environment that supports all
</span><br>
<span class="quotelev2">&gt;&gt; of their features and much, much more, such as :
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; - module hierarchies
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; - module properties and color highlighting (we use it to higlight
</span><br>
<span class="quotelev2">&gt;&gt; bioinformatic modules or tools for example)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; - module caching (very useful for a parallel filesystem with tons of
</span><br>
<span class="quotelev2">&gt;&gt; modules)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; - path priorities (useful to make sure personal modules take
</span><br>
<span class="quotelev2">&gt;&gt; precendence over system modules)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; - export module tree to json
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; It works like a charm, understand both TCL and Lua modules and is
</span><br>
<span class="quotelev2">&gt;&gt; actively developped and debugged. There are litteraly new features every
</span><br>
<span class="quotelev2">&gt;&gt; month or so. If it does not do what you want, odds are that the developper
</span><br>
<span class="quotelev2">&gt;&gt; will add it shortly (I've had it happen).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Maxime
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Le 2014-05-16 17:58, Douglas L Reeder a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Ben,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; You might want to use module (source forge) to manage paths to
</span><br>
<span class="quotelev2">&gt;&gt; different mpi implementations. It is fairly easy to set up and very robust
</span><br>
<span class="quotelev2">&gt;&gt; for this type of problem. You would remove contentious application paths
</span><br>
<span class="quotelev2">&gt;&gt; from you standard PATH and then use module to switch them in and out as
</span><br>
<span class="quotelev2">&gt;&gt; needed.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; On May 16, 2014, at 3:39 PM, Ben Lash &lt;bl10_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; My cluster has just upgraded to a new version of MPI, and I'm using
</span><br>
<span class="quotelev2">&gt;&gt; an old one. It seems that I'm having trouble compiling due to the compiler
</span><br>
<span class="quotelev2">&gt;&gt; wrapper file moving (full error here: <a href="http://pastebin.com/EmwRvCd9">http://pastebin.com/EmwRvCd9</a>)
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; &quot;Cannot open configuration file
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/openmpi/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; I've found the file on the cluster at
</span><br>
<span class="quotelev2">&gt;&gt;  /opt/apps/openmpi/retired/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; How do I tell the old mpi wrapper where this file is?
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; I've already corrected one link to mpich -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/openmpi/retired/1.4.4-intel/, which is in the software I'm trying
</span><br>
<span class="quotelev2">&gt;&gt; to recompile's lib folder (/home/bl10/CMAQv5.0.1/lib/x86_64/ifort). Thanks
</span><br>
<span class="quotelev2">&gt;&gt; for any ideas. I also tried changing $pkgdatadir based on what I read here:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags">http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; --Ben L
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ---------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --Ben L
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
<p><p><p><pre>
-- 
--Ben L
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24444/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24445.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24443.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24443.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24445.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24445.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
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
