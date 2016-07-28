<?
$subject_val = "Re: [OMPI users] openmpi configuration error?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 19:29:55 2014" -->
<!-- isoreceived="20140516232955" -->
<!-- sent="Fri, 16 May 2014 19:29:54 -0400" -->
<!-- isosent="20140516232954" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi configuration error?" -->
<!-- id="53769F72.4010408_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOiaXW3VGGJW+Jz4d7PE76q=c2kHoFYeD4G3nJPtqR9kyoibLQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-05-16 19:29:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24439.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24437.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24437.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24435.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/16/2014 07:09 PM, Ben Lash wrote:
<br>
<span class="quotelev1">&gt; The $PATH and $LD_LIBRARY_PATH seem to be correct, as does module list.
</span><br>
<span class="quotelev1">&gt; I will try to hear back from our particular cluster people, otherwise I
</span><br>
<span class="quotelev1">&gt; will try using the latest version. This is old government software,
</span><br>
<span class="quotelev1">&gt; significant parts are written in fortran77 for example, typically
</span><br>
<span class="quotelev1">&gt; upgrading to a new version breaks it. It was looking for mpich, hence
</span><br>
<span class="quotelev1">&gt; the link, but a long time ago I gave it openmpi instead as recommended
</span><br>
<span class="quotelev1">&gt; and that worked, so I suppose it's less persnickety about the mpi
</span><br>
<span class="quotelev1">&gt; version than some other things. The most current version installed
</span><br>
<span class="quotelev1">&gt; is openmpi/1.6.5-intel(default). Thanks again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We have code here that has been recompiled (some with modifications, 
<br>
some not) with OpenMPI since 1.2.8 with no problems.
<br>
MPI is a standard, both OpenMPI and MPICH follow the standard (except 
<br>
perhaps for very dusty corners or latest greatest MPI 3 features).
<br>
If your code compiled with 1.4.4, it should (better) do with 1.6.5.
<br>
Fortran77 shouldn't be an issue.
<br>
<p>I agree, the PATH and LD_LIBRARY_PATH point to the &quot;retired&quot; directory.
<br>
Many things may have happened, though, say, the &quot;retired&quot; directory may 
<br>
not be complete, or may not have been installed on all cluster nodes,
<br>
or (if not really re-installed) probably points to the original 
<br>
(pre-retirement) directories that no longer exist.
<br>
Rather than sorting this out, I think you have a better shot using
<br>
Open MPI 1.6.5.
<br>
Just load the module and try to recompile the code.
<br>
(Probably just
<br>
module swap openmpi/1.4.4-intel openmpi/1.6.5-intel)
<br>
<p>You may need to tweak with the Makefile, if it hardwires
<br>
the MPI wrappers/binary location, or the library and include paths.
<br>
Some do, some don't.
<br>
<p>Gus Correa
<br>
<p><p><span class="quotelev1">&gt; [bl10_at_login2 ~]$ echo $PATH
</span><br>
<span class="quotelev1">&gt; /home/bl10/rlib/deps/bin:/opt/apps/netcdf/4.1.3/bin:/opt/apps/netcdf/4.1.3/deps/hdf5/1.8.7/bin:/opt/apps/openmpi/retired/1.4.4-intel/bin:/opt/apps/pgi/11.7/linux86-64/11.7/bin:/opt/apps/python3/3.2.1/bin:/opt/apps/intel/2013.1.039/bin:/usr/local/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/opt/ibutils/bin:/opt/apps/moab/current/bin:/projects/dsc1/apps/cmaq/deps/ioapi-kiran/3.1/bin:/home/bl10/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bl10_at_login2 ~]$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /home/bl10/rlib/deps/lib:/projects/dsc1/apps/cmaq/deps/netcdf/4.1.3-intel/lib:/opt/apps/netcdf/4.1.3/lib:/opt/apps/netcdf/4.1.3/deps/hdf5/1.8.7/lib:/opt/apps/netcdf/4.1.3/deps/szip/2.1/lib:/opt/apps/openmpi/retired/1.4.4-intel/lib:/opt/apps/intel/2011.0.013/mkl/lib/intel64:/opt/apps/intel/2013.1.039/mkl/lib/intel64:/opt/apps/intel/2013.1.039/lib/intel64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bl10_at_login2 ~]$ module list
</span><br>
<span class="quotelev1">&gt; Currently Loaded Modulefiles:
</span><br>
<span class="quotelev1">&gt;    1) intel/2013.1.039      2) python3/3.2.1         3) pgi/11.7
</span><br>
<span class="quotelev1">&gt;       4) openmpi/1.4.4-intel   5) netcdf/4.1.3
</span><br>
<span class="quotelev1">&gt; [bl10_at_login2 ~]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 16, 2014 at 5:46 PM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 05/16/2014 06:26 PM, Ben Lash wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I'm not sure I have the ability to implement a different module
</span><br>
<span class="quotelev1">&gt;         management system, I am using a university cluster. We have a module
</span><br>
<span class="quotelev1">&gt;         system, and I am beginning to suspect that maybe it wasn't updated
</span><br>
<span class="quotelev1">&gt;         during the upgrade. I have
</span><br>
<span class="quotelev1">&gt;         module list
</span><br>
<span class="quotelev1">&gt;         ..other modules....openmpi/1.4.4
</span><br>
<span class="quotelev1">&gt;         Perhaps this is still trying to go to the old source location?
</span><br>
<span class="quotelev1">&gt;         How would
</span><br>
<span class="quotelev1">&gt;         I check? Is there an easy way around it if it is wrong? Thanks
</span><br>
<span class="quotelev1">&gt;         again!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Most likely the module openmpi/1.4.4 is out of date.
</span><br>
<span class="quotelev1">&gt;     You can check it with
</span><br>
<span class="quotelev1">&gt;     echo $PATH
</span><br>
<span class="quotelev1">&gt;     If it doesn't point to the &quot;retired&quot; directory, then it is probably
</span><br>
<span class="quotelev1">&gt;     out of date.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Why don't you try to recompile the code
</span><br>
<span class="quotelev1">&gt;     with the current Open MPI installed in the cluster?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     module avail
</span><br>
<span class="quotelev1">&gt;     will show everyting, and you can pick the latest, load it,
</span><br>
<span class="quotelev1">&gt;     and try to recompile the program with that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Fri, May 16, 2014 at 5:07 PM, Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt;         &lt;maxime.boissonneault@__calculquebec.ca
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:maxime.boissonneault_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:maxime.boissonneault@__calculquebec.ca
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Instead of using the outdated and not maintained Module
</span><br>
<span class="quotelev1">&gt;         environment,
</span><br>
<span class="quotelev1">&gt;              why not use Lmod :
</span><br>
<span class="quotelev1">&gt;         <a href="https://www.tacc.utexas.edu/__tacc-projects/lmod">https://www.tacc.utexas.edu/__tacc-projects/lmod</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="https://www.tacc.utexas.edu/tacc-projects/lmod">https://www.tacc.utexas.edu/tacc-projects/lmod</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              It is a drop-in replacement for Module environment that
</span><br>
<span class="quotelev1">&gt;         supports all
</span><br>
<span class="quotelev1">&gt;              of their features and much, much more, such as :
</span><br>
<span class="quotelev1">&gt;              - module hierarchies
</span><br>
<span class="quotelev1">&gt;              - module properties and color highlighting (we use it to
</span><br>
<span class="quotelev1">&gt;         higlight
</span><br>
<span class="quotelev1">&gt;              bioinformatic modules or tools for example)
</span><br>
<span class="quotelev1">&gt;              - module caching (very useful for a parallel filesystem
</span><br>
<span class="quotelev1">&gt;         with tons of
</span><br>
<span class="quotelev1">&gt;              modules)
</span><br>
<span class="quotelev1">&gt;              - path priorities (useful to make sure personal modules take
</span><br>
<span class="quotelev1">&gt;              precendence over system modules)
</span><br>
<span class="quotelev1">&gt;              - export module tree to json
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              It works like a charm, understand both TCL and Lua modules
</span><br>
<span class="quotelev1">&gt;         and is
</span><br>
<span class="quotelev1">&gt;              actively developped and debugged. There are litteraly new
</span><br>
<span class="quotelev1">&gt;         features
</span><br>
<span class="quotelev1">&gt;              every month or so. If it does not do what you want, odds
</span><br>
<span class="quotelev1">&gt;         are that
</span><br>
<span class="quotelev1">&gt;              the developper will add it shortly (I've had it happen).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Le 2014-05-16 17:58, Douglas L Reeder a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Ben,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  You might want to use module (source forge) to manage
</span><br>
<span class="quotelev1">&gt;             paths to
</span><br>
<span class="quotelev1">&gt;                  different mpi implementations. It is fairly easy to set
</span><br>
<span class="quotelev1">&gt;             up and
</span><br>
<span class="quotelev1">&gt;                  very robust for this type of problem. You would remove
</span><br>
<span class="quotelev1">&gt;             contentious
</span><br>
<span class="quotelev1">&gt;                  application paths from you standard PATH and then use
</span><br>
<span class="quotelev1">&gt;             module to
</span><br>
<span class="quotelev1">&gt;                  switch them in and out as needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Doug Reeder
</span><br>
<span class="quotelev1">&gt;                  On May 16, 2014, at 3:39 PM, Ben Lash &lt;bl10_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:bl10_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                  &lt;mailto:bl10_at_[hidden] &lt;mailto:bl10_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      My cluster has just upgraded to a new version of
</span><br>
<span class="quotelev1">&gt;                 MPI, and I'm
</span><br>
<span class="quotelev1">&gt;                      using an old one. It seems that I'm having trouble
</span><br>
<span class="quotelev1">&gt;                 compiling due
</span><br>
<span class="quotelev1">&gt;                      to the compiler wrapper file moving (full error here:
</span><br>
<span class="quotelev1">&gt;                 <a href="http://pastebin.com/EmwRvCd9">http://pastebin.com/EmwRvCd9</a>)
</span><br>
<span class="quotelev1">&gt;                      &quot;Cannot open configuration file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 /opt/apps/openmpi/1.4.4-intel/__share/openmpi/mpif90-wrapper-__data.txt&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      I've found the file on the cluster at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   /opt/apps/openmpi/retired/1.4.__4-intel/share/openmpi/mpif90-__wrapper-data.txt
</span><br>
<span class="quotelev1">&gt;                      How do I tell the old mpi wrapper where this file is?
</span><br>
<span class="quotelev1">&gt;                      I've already corrected one link to mpich -&gt;
</span><br>
<span class="quotelev1">&gt;                      /opt/apps/openmpi/retired/1.4.__4-intel/, which is
</span><br>
<span class="quotelev1">&gt;                 in the software
</span><br>
<span class="quotelev1">&gt;                      I'm trying to recompile's lib folder
</span><br>
<span class="quotelev1">&gt;                      (/home/bl10/CMAQv5.0.1/lib/__x86_64/ifort). Thanks
</span><br>
<span class="quotelev1">&gt;                 for any ideas. I
</span><br>
<span class="quotelev1">&gt;                      also tried changing $pkgdatadir based on what I
</span><br>
<span class="quotelev1">&gt;                 read here:
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/faq/?__category=mpi-apps#default-__wrapper-compiler-flags">http://www.open-mpi.org/faq/?__category=mpi-apps#default-__wrapper-compiler-flags</a>
</span><br>
<span class="quotelev1">&gt;                 &lt;<a href="http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags">http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      --Ben L
</span><br>
<span class="quotelev1">&gt;                      _________________________________________________
</span><br>
<span class="quotelev1">&gt;                      users mailing list
</span><br>
<span class="quotelev1">&gt;                 users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                 &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                 &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  _________________________________________________
</span><br>
<span class="quotelev1">&gt;                  users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;               &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              --
</span><br>
<span class="quotelev1">&gt;              ------------------------------__---
</span><br>
<span class="quotelev1">&gt;              Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt;              Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev1">&gt;              Ph. D. en physique
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              _________________________________________________
</span><br>
<span class="quotelev1">&gt;              users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         --
</span><br>
<span class="quotelev1">&gt;         --Ben L
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _________________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _________________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
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
<li><strong>Next message:</strong> <a href="24439.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24437.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24437.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24435.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
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
