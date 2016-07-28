<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 11:54:46 2013" -->
<!-- isoreceived="20130621155446" -->
<!-- sent="Fri, 21 Jun 2013 11:54:42 -0400" -->
<!-- isosent="20130621155442" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so" -->
<!-- id="51C47742.3050809_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACDq=fqDpbfqhTKoWZOXkxx_byYiimhS_fVcwi5mOzJuS+GTpw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 11:54:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22183.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Finalize hangs!"</a>
<li><strong>Previous message:</strong> <a href="22181.php">Salvatore Podda: "[OMPI users]  no daemonizing orted."</a>
<li><strong>In reply to:</strong> <a href="22177.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22184.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22184.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22186.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Stefano
<br>
<p>Make sure your Intel compiler's shared libraries
<br>
are accessible on all nodes.
<br>
<p>Is your /home directory shared across all nodes?
<br>
How about /opt (if Intel is installed there)?
<br>
<p>By default Intel installs the compilers on /opt, which in typical
<br>
clusters (and Linux distributions) is a local directory (to each node),
<br>
not shared via NFS.
<br>
Although you seem to have installed it somewhere else,
<br>
/home/stefano/opt maybe, if /home/stefano/opt
<br>
is just a soft link to /opt, not a real directory,
<br>
that may not to do the trick across the cluster network.
<br>
<p>This error:
<br>
<p><span class="quotelev2"> &gt;&gt;         /home/stefano/opt/mpi/openmpi/1.6.4/intel/bin/orted: error
</span><br>
<span class="quotelev2"> &gt;&gt;         while loading shared libraries: libimf.so: cannot open shared
</span><br>
<span class="quotelev2"> &gt;&gt;         object file: No such file or directory
</span><br>
<p>suggests something like that is going on (libimf.so is an
<br>
*Intel shared library*, it is *not an Open MPI libary*).
<br>
<p><p>To have all needed tools (OpenMPI and Intel)
<br>
available on all nodes, there are two typical solutions
<br>
(by the way, see this FAQ: 
<br>
<a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>):
<br>
<p>1) Install them on all nodes, via RPM, or configure/make/install, or 
<br>
other mechanism.
<br>
This is time consuming and costly to maintain, but scales well
<br>
in big or small clusters.
<br>
<p>2)  Install them on your master/head/adminsitration/storage node,
<br>
and and share them via network (typicaly via NFS export/mount).
<br>
This is easy to maintain, and scales well in small/medium clusters,
<br>
but not so much on big ones.
<br>
<p>Make sure the Intel and MPI directories are either shared by
<br>
or present/installed on all nodes.
<br>
<p>I also wonder if you really need these many environment variables:
<br>
<p><span class="quotelev2"> &gt;&gt; LD_LIBRARY_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2"> &gt;&gt; export LD_RUN_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_RUN_PATH
</span><br>
<p>or if that may be actually replaced by the simpler form:
<br>
<p><span class="quotelev2"> &gt;&gt; LD_LIBRARY_PATH=${MPI}/lib:$LD_LIBRARY_PATH
</span><br>
<p>I hope it helps,
<br>
Gus Correa
<br>
<p><p><p>On 06/21/2013 04:35 AM, Stefano Zaghi wrote:
<br>
<span class="quotelev1">&gt; Wow... I think you are right... I will am check after the job I have
</span><br>
<span class="quotelev1">&gt; just started will finish.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See you soon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stefano Zaghi
</span><br>
<span class="quotelev1">&gt; Ph.D. Aerospace Engineer,
</span><br>
<span class="quotelev1">&gt; Research Scientist, Dept. of Computational Hydrodynamics at *CNR-INSEAN*
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.insean.cnr.it/en/content/cnr-insean">http://www.insean.cnr.it/en/content/cnr-insean</a>&gt;
</span><br>
<span class="quotelev1">&gt; The Italian Ship Model Basin
</span><br>
<span class="quotelev1">&gt; (+39) 06.50299297 (Office)
</span><br>
<span class="quotelev1">&gt; My codes:
</span><br>
<span class="quotelev1">&gt; *OFF* &lt;<a href="https://github.com/szaghi/OFF">https://github.com/szaghi/OFF</a>&gt;, Open source Finite volumes Fluid
</span><br>
<span class="quotelev1">&gt; dynamics code
</span><br>
<span class="quotelev1">&gt; *Lib_VTK_IO* &lt;<a href="https://github.com/szaghi/Lib_VTK_IO">https://github.com/szaghi/Lib_VTK_IO</a>&gt;, a Fortran library
</span><br>
<span class="quotelev1">&gt; to write and read data conforming the VTK standard
</span><br>
<span class="quotelev1">&gt; *IR_Precision* &lt;<a href="https://github.com/szaghi/IR_Precision">https://github.com/szaghi/IR_Precision</a>&gt;, a Fortran
</span><br>
<span class="quotelev1">&gt; (standard 2003) module to develop portable codes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2013/6/21 &lt;thomas.forde_at_[hidden] &lt;mailto:thomas.forde_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hi Stefano
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /home/stefano/opt/intel/2013.4.183/lib/intel64/ is also the wrong
</span><br>
<span class="quotelev1">&gt;     path, as the file is in ..183/lib/ and not ...183/lib/intel64/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     is that why?
</span><br>
<span class="quotelev1">&gt;     ./Thomas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Den 21. juni 2013 kl. 10:26 skrev &quot;Stefano Zaghi&quot;
</span><br>
<span class="quotelev1">&gt;     &lt;stefano.zaghi_at_[hidden] &lt;mailto:stefano.zaghi_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Dear Thomas,
</span><br>
<span class="quotelev2">&gt;&gt;     thank you again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Symlink in /usr/lib64 is not enough, I have symlinked also
</span><br>
<span class="quotelev2">&gt;&gt;     in /home/stefano/opt/mpi/openmpi/1.6.4/intel/lib and, as expected,
</span><br>
<span class="quotelev2">&gt;&gt;     not only libimf.so but also ibirng.so and libintlc.so.5 are necessary.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Now also remote runs works, but this is only a workaround, I still
</span><br>
<span class="quotelev2">&gt;&gt;     not understand why mpirun do not find intel library even if
</span><br>
<span class="quotelev2">&gt;&gt;     LD_LIBRARY_PATH contains also
</span><br>
<span class="quotelev2">&gt;&gt;      /home/stefano/opt/intel/2013.4.183/lib/intel64. Can you try
</span><br>
<span class="quotelev2">&gt;&gt;     explain again?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Stefano Zaghi
</span><br>
<span class="quotelev2">&gt;&gt;     Ph.D. Aerospace Engineer,
</span><br>
<span class="quotelev2">&gt;&gt;     Research Scientist, Dept. of Computational Hydrodynamics at
</span><br>
<span class="quotelev2">&gt;&gt;     *CNR-INSEAN* &lt;<a href="http://www.insean.cnr.it/en/content/cnr-insean">http://www.insean.cnr.it/en/content/cnr-insean</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The Italian Ship Model Basin
</span><br>
<span class="quotelev2">&gt;&gt;     (+39) 06.50299297 (Office)
</span><br>
<span class="quotelev2">&gt;&gt;     My codes:
</span><br>
<span class="quotelev2">&gt;&gt;     *OFF* &lt;<a href="https://github.com/szaghi/OFF">https://github.com/szaghi/OFF</a>&gt;, Open source Finite volumes
</span><br>
<span class="quotelev2">&gt;&gt;     Fluid dynamics code
</span><br>
<span class="quotelev2">&gt;&gt;     *Lib_VTK_IO* &lt;<a href="https://github.com/szaghi/Lib_VTK_IO">https://github.com/szaghi/Lib_VTK_IO</a>&gt;, a  would
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran library to write and read data conforming the VTK standard
</span><br>
<span class="quotelev2">&gt;&gt;     *IR_Precision* &lt;<a href="https://github.com/szaghi/IR_Precision">https://github.com/szaghi/IR_Precision</a>&gt;, a Fortran
</span><br>
<span class="quotelev2">&gt;&gt;     (standard 2003) module to develop portable codes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     2013/6/21 &lt;thomas.forde_at_[hidden] &lt;mailto:thomas.forde_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         your settings are as following:
</span><br>
<span class="quotelev2">&gt;&gt;         export MPI=/home/stefano/opt/mpi/openmpi/1.6.4/intel
</span><br>
<span class="quotelev2">&gt;&gt;         export PATH=${MPI}/bin:$PATH
</span><br>
<span class="quotelev2">&gt;&gt;         export
</span><br>
<span class="quotelev2">&gt;&gt;         LD_LIBRARY_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;         export LD_RUN_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_RUN_PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         and your path to libimf.so file is
</span><br>
<span class="quotelev2">&gt;&gt;         /home/stefano/opt/intel/2013.4.183/lib/libimf.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         your export LD_LIbrary_PATH if i can decude it right would be
</span><br>
<span class="quotelev2">&gt;&gt;         because you use the $MPI first.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/stefano/opt/mpi/openmpi/1.64./intel/lib/openmpi and
</span><br>
<span class="quotelev2">&gt;&gt;         /home/stefano/opt/mpi/openmpi/1.64./intel/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         as you can see it doesnt look for the files int he right place.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         the simplest thing i would try is to symlink the libimf.so
</span><br>
<span class="quotelev2">&gt;&gt;         file to /usr/lib64 and should give you a workaround.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         From: Stefano Zaghi &lt;stefano.zaghi_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:stefano.zaghi_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         To: Open MPI Users &lt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:users_at_[hidden]&gt;&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;         Date: 21.06.2013 09:45
</span><br>
<span class="quotelev2">&gt;&gt;         Subject: Re: [OMPI users] OpenMPI 1.6.4 and Intel
</span><br>
<span class="quotelev2">&gt;&gt;         Composer_xe_2013.4.183: problem with remote runs, orted: error
</span><br>
<span class="quotelev2">&gt;&gt;         while loading shared libraries: libimf.so
</span><br>
<span class="quotelev2">&gt;&gt;         Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Dear Thomas,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         thank you very much for your very fast replay.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Yes I have that library in the correct place:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -rwxr-xr-x 1 stefano users 3.0M May 20 14:22
</span><br>
<span class="quotelev2">&gt;&gt;         opt/intel/2013.4.183/lib/intel64/libimf.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Stefano Zaghi
</span><br>
<span class="quotelev2">&gt;&gt;         Ph.D. Aerospace Engineer,
</span><br>
<span class="quotelev2">&gt;&gt;         Research Scientist, Dept. of Computational Hydrodynamics at
</span><br>
<span class="quotelev2">&gt;&gt;         *_CNR-INSEAN_* &lt;<a href="http://www.insean.cnr.it/en/content/cnr-insean">http://www.insean.cnr.it/en/content/cnr-insean</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         The Italian Ship Model Basin
</span><br>
<span class="quotelev2">&gt;&gt;         (+39) 06.50299297 (Office)
</span><br>
<span class="quotelev2">&gt;&gt;         My codes:
</span><br>
<span class="quotelev2">&gt;&gt;         *_OFF_* &lt;<a href="https://github.com/szaghi/OFF">https://github.com/szaghi/OFF</a>&gt;, Open source Finite
</span><br>
<span class="quotelev2">&gt;&gt;         volumes Fluid dynamics code
</span><br>
<span class="quotelev2">&gt;&gt;         *_Lib_VTK_IO_* &lt;<a href="https://github.com/szaghi/Lib_VTK_IO">https://github.com/szaghi/Lib_VTK_IO</a>&gt;, a
</span><br>
<span class="quotelev2">&gt;&gt;         Fortran library to write and read data conforming the VTK standard
</span><br>
<span class="quotelev2">&gt;&gt;         *_IR_Precision_* &lt;<a href="https://github.com/szaghi/IR_Precision">https://github.com/szaghi/IR_Precision</a>&gt;, a
</span><br>
<span class="quotelev2">&gt;&gt;         Fortran (standard 2003) module to develop portable codes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         2013/6/21 &lt;_thomas.forde_at_[hidden]_
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:thomas.forde_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         hi Stefano
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         your error message show that you are missing a shared library,
</span><br>
<span class="quotelev2">&gt;&gt;         not necessary that library path is wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         do you actually have libimf.so, can you find the file on your
</span><br>
<span class="quotelev2">&gt;&gt;         system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         ./Thomas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         From: Stefano Zaghi &lt;_stefano.zaghi_at_[hidden]_
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:stefano.zaghi_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         To: _users_at_[hidden]_ &lt;mailto:users_at_[hidden]&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;         Date: 21.06.2013 09:27
</span><br>
<span class="quotelev2">&gt;&gt;         Subject: [OMPI users] OpenMPI 1.6.4 and Intel
</span><br>
<span class="quotelev2">&gt;&gt;         Composer_xe_2013.4.183: problem with remote runs, orted: error
</span><br>
<span class="quotelev2">&gt;&gt;         while loading shared libraries: libimf.so
</span><br>
<span class="quotelev2">&gt;&gt;         Sent by: _users-bounces_at_[hidden]_
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Dear All,
</span><br>
<span class="quotelev2">&gt;&gt;         I have compiled OpenMPI 1.6.4 with Intel Composer_xe_2013.4.183.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         My configure is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         ./configure --prefix=/home/stefano/opt/mpi/openmpi/1.6.4/intel
</span><br>
<span class="quotelev2">&gt;&gt;         CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Intel Composer has been installed in:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/stefano/opt/intel/2013.4.183/composer_xe_2013.4.183
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Into the .bashrc and .profile in all nodes there is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         source /home/stefano/opt/intel/2013.4.183/bin/compilervars.sh
</span><br>
<span class="quotelev2">&gt;&gt;         intel64
</span><br>
<span class="quotelev2">&gt;&gt;         export MPI=/home/stefano/opt/mpi/openmpi/1.6.4/intel
</span><br>
<span class="quotelev2">&gt;&gt;         export PATH=${MPI}/bin:$PATH
</span><br>
<span class="quotelev2">&gt;&gt;         export
</span><br>
<span class="quotelev2">&gt;&gt;         LD_LIBRARY_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;         export LD_RUN_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_RUN_PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         If I run parallel job into each single node (e.g. mpirun -np 8
</span><br>
<span class="quotelev2">&gt;&gt;         myprog) all works well. However, when I tried to run parallel
</span><br>
<span class="quotelev2">&gt;&gt;         job in more nodes of the cluster (remote runs) like the
</span><br>
<span class="quotelev2">&gt;&gt;         following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         mpirun -np 16 --bynode --machinefile nodi.txt -x
</span><br>
<span class="quotelev2">&gt;&gt;         LD_LIBRARY_PATH -x LD_RUN_PATH myprog
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I got the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /home/stefano/opt/mpi/openmpi/1.6.4/intel/bin/orted: error
</span><br>
<span class="quotelev2">&gt;&gt;         while loading shared libraries: libimf.so: cannot open shared
</span><br>
<span class="quotelev2">&gt;&gt;         object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I have read many FAQs and online resources, all indicating
</span><br>
<span class="quotelev2">&gt;&gt;         LD_LIBRARY_PATH as the possible problem (wrong setting).
</span><br>
<span class="quotelev2">&gt;&gt;         However I am not able to figure out what is going wrong, the
</span><br>
<span class="quotelev2">&gt;&gt;         LD_LIBRARY_PATH seems to set right in all nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         It is worth noting that in the same cluster I have successful
</span><br>
<span class="quotelev2">&gt;&gt;         installed OpenMPI 1.4.3 with Intel Composer_xe_2011_sp1.6.233
</span><br>
<span class="quotelev2">&gt;&gt;         following exactly the same procedure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thank you in advance for all suggestion,
</span><br>
<span class="quotelev2">&gt;&gt;         sincerely
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Stefano Zaghi
</span><br>
<span class="quotelev2">&gt;&gt;         Ph.D. Aerospace Engineer,
</span><br>
<span class="quotelev2">&gt;&gt;         Research Scientist, Dept. of Computational Hydrodynamics at
</span><br>
<span class="quotelev2">&gt;&gt;         *_CNR-INSEAN_* &lt;<a href="http://www.insean.cnr.it/en/content/cnr-insean">http://www.insean.cnr.it/en/content/cnr-insean</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         The Italian Ship Model Basin
</span><br>
<span class="quotelev2">&gt;&gt;         (+39) 06.50299297 (Office)
</span><br>
<span class="quotelev2">&gt;&gt;         My codes: _
</span><br>
<span class="quotelev2">&gt;&gt;         _*_OFF_* &lt;<a href="https://github.com/szaghi/OFF">https://github.com/szaghi/OFF</a>&gt;, Open source Finite
</span><br>
<span class="quotelev2">&gt;&gt;         volumes Fluid dynamics code _
</span><br>
<span class="quotelev2">&gt;&gt;         _*_Lib_VTK_IO_* &lt;<a href="https://github.com/szaghi/Lib_VTK_IO">https://github.com/szaghi/Lib_VTK_IO</a>&gt;, a
</span><br>
<span class="quotelev2">&gt;&gt;         Fortran library to write and read data conforming the VTK
</span><br>
<span class="quotelev2">&gt;&gt;         standard
</span><br>
<span class="quotelev2">&gt;&gt;         *_IR_Precision_* &lt;<a href="https://github.com/szaghi/IR_Precision">https://github.com/szaghi/IR_Precision</a>&gt;, a
</span><br>
<span class="quotelev2">&gt;&gt;         Fortran (standard 2003) module to develop portable
</span><br>
<span class="quotelev2">&gt;&gt;         codes_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list_
</span><br>
<span class="quotelev2">&gt;&gt;         __users_at_[hidden]_ &lt;mailto:users_at_[hidden]&gt;_
</span><br>
<span class="quotelev2">&gt;&gt;         __<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Denne e-posten kan innehalde informasjon som er konfidensiell
</span><br>
<span class="quotelev2">&gt;&gt;         og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte
</span><br>
<span class="quotelev2">&gt;&gt;         adressat har adgang
</span><br>
<span class="quotelev2">&gt;&gt;         til &#229; lese eller vidareformidle denne e-posten eller
</span><br>
<span class="quotelev2">&gt;&gt;         tilh&#248;yrande vedlegg. Dersom De ikkje er den tiltenkte
</span><br>
<span class="quotelev2">&gt;&gt;         mottakar, vennligst kontakt avsendar pr e-post, slett denne
</span><br>
<span class="quotelev2">&gt;&gt;         e-posten med vedlegg og makuler samtlige utskrifter og kopiar
</span><br>
<span class="quotelev2">&gt;&gt;         av den.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         This e-mail may contain confidential information, or otherwise
</span><br>
<span class="quotelev2">&gt;&gt;         be protected against unauthorised use. Any disclosure,
</span><br>
<span class="quotelev2">&gt;&gt;         distribution or other use of the information by anyone but the
</span><br>
<span class="quotelev2">&gt;&gt;         intended recipient is strictly prohibited.
</span><br>
<span class="quotelev2">&gt;&gt;         If you have received this e-mail in error, please advise the
</span><br>
<span class="quotelev2">&gt;&gt;         sender by immediate reply and destroy the received documents
</span><br>
<span class="quotelev2">&gt;&gt;         and any copies hereof.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         PBefore
</span><br>
<span class="quotelev2">&gt;&gt;         printing, think about the environment
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list_
</span><br>
<span class="quotelev2">&gt;&gt;         __users_at_[hidden]_ &lt;mailto:users_at_[hidden]&gt;_
</span><br>
<span class="quotelev2">&gt;&gt;         __<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Denne e-posten kan innehalde informasjon som er konfidensiell
</span><br>
<span class="quotelev2">&gt;&gt;         og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte
</span><br>
<span class="quotelev2">&gt;&gt;         adressat har adgang
</span><br>
<span class="quotelev2">&gt;&gt;         til &#229; lese eller vidareformidle denne e-posten eller
</span><br>
<span class="quotelev2">&gt;&gt;         tilh&#248;yrande vedlegg. Dersom De ikkje er den tiltenkte
</span><br>
<span class="quotelev2">&gt;&gt;         mottakar, vennligst kontakt avsendar pr e-post, slett denne
</span><br>
<span class="quotelev2">&gt;&gt;         e-posten med vedlegg og makuler samtlige utskrifter og kopiar
</span><br>
<span class="quotelev2">&gt;&gt;         av den.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         This e-mail may contain confidential information, or otherwise
</span><br>
<span class="quotelev2">&gt;&gt;         be protected against unauthorised use. Any disclosure,
</span><br>
<span class="quotelev2">&gt;&gt;         distribution or other use of the information by anyone but the
</span><br>
<span class="quotelev2">&gt;&gt;         intended recipient is strictly prohibited.
</span><br>
<span class="quotelev2">&gt;&gt;         If you have received this e-mail in error, please advise the
</span><br>
<span class="quotelev2">&gt;&gt;         sender by immediate reply and destroy the received documents
</span><br>
<span class="quotelev2">&gt;&gt;         and any copies hereof.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         PBefore
</span><br>
<span class="quotelev2">&gt;&gt;         printing, think about the environment
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Denne e-posten kan innehalde informasjon som er konfidensiell
</span><br>
<span class="quotelev1">&gt;     og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat
</span><br>
<span class="quotelev1">&gt;     har adgang til &#229; lese eller vidareformidle denne e-posten eller
</span><br>
<span class="quotelev1">&gt;     tilh&#248;yrande vedlegg. Dersom De ikkje er den tiltenkte mottakar,
</span><br>
<span class="quotelev1">&gt;     vennligst kontakt avsendar pr e-post, slett denne e-posten med
</span><br>
<span class="quotelev1">&gt;     vedlegg og makuler samtlige utskrifter og kopiar av den.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This e-mail may contain confidential information, or otherwise be
</span><br>
<span class="quotelev1">&gt;     protected against unauthorised use. Any disclosure, distribution or
</span><br>
<span class="quotelev1">&gt;     other use of the information by anyone but the intended recipient is
</span><br>
<span class="quotelev1">&gt;     strictly prohibited. If you have received this e-mail in error,
</span><br>
<span class="quotelev1">&gt;     please advise the sender by immediate reply and destroy the received
</span><br>
<span class="quotelev1">&gt;     documents and any copies hereof.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     PBefore printing, think about the environment
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22183.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Finalize hangs!"</a>
<li><strong>Previous message:</strong> <a href="22181.php">Salvatore Podda: "[OMPI users]  no daemonizing orted."</a>
<li><strong>In reply to:</strong> <a href="22177.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22184.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22184.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22186.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
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
