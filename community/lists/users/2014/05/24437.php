<?
$subject_val = "Re: [OMPI users] openmpi configuration error?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 19:09:59 2014" -->
<!-- isoreceived="20140516230959" -->
<!-- sent="Fri, 16 May 2014 18:09:38 -0500" -->
<!-- isosent="20140516230938" -->
<!-- name="Ben Lash" -->
<!-- email="bl10_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi configuration error?" -->
<!-- id="CAOiaXW3VGGJW+Jz4d7PE76q=c2kHoFYeD4G3nJPtqR9kyoibLQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5376955B.4070503_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2014-05-16 19:09:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24438.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24436.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24436.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24438.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24438.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The $PATH and $LD_LIBRARY_PATH seem to be correct, as does module list. I
<br>
will try to hear back from our particular cluster people, otherwise I will
<br>
try using the latest version. This is old government software, significant
<br>
parts are written in fortran77 for example, typically upgrading to a new
<br>
version breaks it. It was looking for mpich, hence the link, but a long
<br>
time ago I gave it openmpi instead as recommended and that worked, so I
<br>
suppose it's less persnickety about the mpi version than some other things.
<br>
The most current version installed is openmpi/1.6.5-intel(default). Thanks
<br>
again.
<br>
<p>[bl10_at_login2 ~]$ echo $PATH
<br>
/home/bl10/rlib/deps/bin:/opt/apps/netcdf/4.1.3/bin:/opt/apps/netcdf/4.1.3/deps/hdf5/1.8.7/bin:/opt/apps/openmpi/retired/1.4.4-intel/bin:/opt/apps/pgi/11.7/linux86-64/11.7/bin:/opt/apps/python3/3.2.1/bin:/opt/apps/intel/2013.1.039/bin:/usr/local/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/opt/ibutils/bin:/opt/apps/moab/current/bin:/projects/dsc1/apps/cmaq/deps/ioapi-kiran/3.1/bin:/home/bl10/bin
<br>
<p>[bl10_at_login2 ~]$ echo $LD_LIBRARY_PATH
<br>
/home/bl10/rlib/deps/lib:/projects/dsc1/apps/cmaq/deps/netcdf/4.1.3-intel/lib:/opt/apps/netcdf/4.1.3/lib:/opt/apps/netcdf/4.1.3/deps/hdf5/1.8.7/lib:/opt/apps/netcdf/4.1.3/deps/szip/2.1/lib:/opt/apps/openmpi/retired/1.4.4-intel/lib:/opt/apps/intel/2011.0.013/mkl/lib/intel64:/opt/apps/intel/2013.1.039/mkl/lib/intel64:/opt/apps/intel/2013.1.039/lib/intel64
<br>
<p>[bl10_at_login2 ~]$ module list
<br>
Currently Loaded Modulefiles:
<br>
&nbsp;&nbsp;1) intel/2013.1.039      2) python3/3.2.1         3) pgi/11.7
<br>
&nbsp;4) openmpi/1.4.4-intel   5) netcdf/4.1.3
<br>
[bl10_at_login2 ~]$
<br>
<p><p><p><p>On Fri, May 16, 2014 at 5:46 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 05/16/2014 06:26 PM, Ben Lash wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I have the ability to implement a different module
</span><br>
<span class="quotelev2">&gt;&gt; management system, I am using a university cluster. We have a module
</span><br>
<span class="quotelev2">&gt;&gt; system, and I am beginning to suspect that maybe it wasn't updated
</span><br>
<span class="quotelev2">&gt;&gt; during the upgrade. I have
</span><br>
<span class="quotelev2">&gt;&gt; module list
</span><br>
<span class="quotelev2">&gt;&gt; ..other modules....openmpi/1.4.4
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps this is still trying to go to the old source location? How would
</span><br>
<span class="quotelev2">&gt;&gt; I check? Is there an easy way around it if it is wrong? Thanks again!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Most likely the module openmpi/1.4.4 is out of date.
</span><br>
<span class="quotelev1">&gt; You can check it with
</span><br>
<span class="quotelev1">&gt; echo $PATH
</span><br>
<span class="quotelev1">&gt; If it doesn't point to the &quot;retired&quot; directory, then it is probably out of
</span><br>
<span class="quotelev1">&gt; date.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why don't you try to recompile the code
</span><br>
<span class="quotelev1">&gt; with the current Open MPI installed in the cluster?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module avail
</span><br>
<span class="quotelev1">&gt; will show everyting, and you can pick the latest, load it,
</span><br>
<span class="quotelev1">&gt; and try to recompile the program with that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, May 16, 2014 at 5:07 PM, Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt; &lt;maxime.boissonneault_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Instead of using the outdated and not maintained Module environment,
</span><br>
<span class="quotelev2">&gt;&gt;     why not use Lmod : <a href="https://www.tacc.utexas.edu/tacc-projects/lmod">https://www.tacc.utexas.edu/tacc-projects/lmod</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     It is a drop-in replacement for Module environment that supports all
</span><br>
<span class="quotelev2">&gt;&gt;     of their features and much, much more, such as :
</span><br>
<span class="quotelev2">&gt;&gt;     - module hierarchies
</span><br>
<span class="quotelev2">&gt;&gt;     - module properties and color highlighting (we use it to higlight
</span><br>
<span class="quotelev2">&gt;&gt;     bioinformatic modules or tools for example)
</span><br>
<span class="quotelev2">&gt;&gt;     - module caching (very useful for a parallel filesystem with tons of
</span><br>
<span class="quotelev2">&gt;&gt;     modules)
</span><br>
<span class="quotelev2">&gt;&gt;     - path priorities (useful to make sure personal modules take
</span><br>
<span class="quotelev2">&gt;&gt;     precendence over system modules)
</span><br>
<span class="quotelev2">&gt;&gt;     - export module tree to json
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     It works like a charm, understand both TCL and Lua modules and is
</span><br>
<span class="quotelev2">&gt;&gt;     actively developped and debugged. There are litteraly new features
</span><br>
<span class="quotelev2">&gt;&gt;     every month or so. If it does not do what you want, odds are that
</span><br>
<span class="quotelev2">&gt;&gt;     the developper will add it shortly (I've had it happen).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Maxime
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Le 2014-05-16 17:58, Douglas L Reeder a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Ben,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     You might want to use module (source forge) to manage paths to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     different mpi implementations. It is fairly easy to set up and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     very robust for this type of problem. You would remove contentious
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     application paths from you standard PATH and then use module to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     switch them in and out as needed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Doug Reeder
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On May 16, 2014, at 3:39 PM, Ben Lash &lt;bl10_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;mailto:bl10_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      My cluster has just upgraded to a new version of MPI, and I'm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     using an old one. It seems that I'm having trouble compiling due
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     to the compiler wrapper file moving (full error here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     <a href="http://pastebin.com/EmwRvCd9">http://pastebin.com/EmwRvCd9</a>)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &quot;Cannot open configuration file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /opt/apps/openmpi/1.4.4-intel/share/openmpi/mpif90-wrapper-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; data.txt&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I've found the file on the cluster at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      /opt/apps/openmpi/retired/1.4.4-intel/share/openmpi/mpif90-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrapper-data.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     How do I tell the old mpi wrapper where this file is?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I've already corrected one link to mpich -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /opt/apps/openmpi/retired/1.4.4-intel/, which is in the software
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I'm trying to recompile's lib folder
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     (/home/bl10/CMAQv5.0.1/lib/x86_64/ifort). Thanks for any ideas. I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     also tried changing $pkgdatadir based on what I read here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     <a href="http://www.open-mpi.org/faq/?category=mpi-apps#default">http://www.open-mpi.org/faq/?category=mpi-apps#default</a>-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrapper-compiler-flags
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     --Ben L
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --
</span><br>
<span class="quotelev2">&gt;&gt;     ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt;     Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev2">&gt;&gt;     Ph. D. en physique
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --Ben L
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
--Ben L
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24437/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24438.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24436.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24436.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24438.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24438.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
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
