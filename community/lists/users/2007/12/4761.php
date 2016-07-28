<?
$subject_val = "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 31 09:35:50 2007" -->
<!-- isoreceived="20071231143550" -->
<!-- sent="Mon, 31 Dec 2007 08:35:40 -0600" -->
<!-- isosent="20071231143540" -->
<!-- name="pat.o'bryant_at_[hidden]" -->
<!-- email="pat.o'bryant_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)" -->
<!-- id="OFCF3222E1.D7DD2D70-ON862573C2.00491728-862573C2.00502BC1_at_exxonmobil.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="df8c8a6d0712302150k763389f6ue102a0ec7383d0a2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)<br>
<strong>From:</strong> <a href="mailto:pat.o'bryant_at_[hidden]?Subject=Re:%20[OMPI%20users]%20multi-compiler%20builds%20of%20OpenMPI%20(RPM)"><em>pat.o'bryant_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-12-31 09:35:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4762.php">Amit Kumar Saha: "Re: [OMPI users] No output from mpirun"</a>
<li><strong>Previous message:</strong> <a href="4760.php">Varun R: "Re: [OMPI users] No output from mpirun"</a>
<li><strong>In reply to:</strong> <a href="4758.php">Jim Kusznir: "[OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4775.php">Jeff Squyres: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jim,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I would start with this site &quot;<a href="http://www.rpm.org/max-rpm/">http://www.rpm.org/max-rpm/</a>&quot;. This site
<br>
gives a really good explanation of building packages using rpm. I built my
<br>
own spec file which gave me a better understanding of how RPMs work.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;What I did with my installation was to set up an rpm that built
<br>
packages for both GNU and Intel compilers. Chapter 18 at the &quot;max-rpm&quot; site
<br>
explains how to do this. So here is the general layout of my spec file for
<br>
OpenMPI and two compilers. Note that the end result is one high level
<br>
directory with two subdirectories, each one for a different compiler. The
<br>
only down side to this process is that &quot;LD_LIBRARY_PATH&quot; must be used for
<br>
both building and running OpenMPI jobs.
<br>
<p>Hope this helps,
<br>
Pat
<br>
<p>%package intel
<br>
Summary: OpenMPI, Intel
<br>
Group: MPI software
<br>
# Disable check for dependencies
<br>
AutoReqProv: no                     &lt;== without this option, an &quot;rpm -i ..&quot;
<br>
leads to lots of unsatisfied &quot;requires..&quot;
<br>
.....
<br>
<p>%package gnu
<br>
Summary: OpenMPI, GNU
<br>
Group: MPI software
<br>
# Disable check for dependencies
<br>
AutoReqProv: no
<br>
.....
<br>
<p># Note only 1 prep section allowed
<br>
%prep
<br>
rm -rf $RPM_BUILD_DIR/openmpi-1.2.4_intel
<br>
rm -rf $RPM_BUILD_DIR/openmpi-1.2.4_gnu
<br>
cd $RPM_BUILD_DIR
<br>
<p># create directory for intel build
<br>
tar zxvf $RPM_SOURCE_DIR/openmpi-1.2.4.tar.gz
<br>
mv openmpi-1.2.4 openmpi-1.2.4_intel                        &lt;== this allows
<br>
multiple extractions of gz file within source directory
<br>
<p># create directory for gnu build
<br>
tar zxvf $RPM_SOURCE_DIR/openmpi-1.2.4.tar.gz
<br>
mv openmpi-1.2.4 openmpi-1.2.4_gnu                    &lt;== this allows
<br>
multiple extractions of gz file within source directory
<br>
.....
<br>
# Build Intel
<br>
cd $RPM_BUILD_DIR/openmpi-1.2.4_intel
<br>
./configure --prefix /usr/local/openmpi-1.2.4/intel
<br>
--with-openib=/usr/local/ofed \           &lt;== upper level directory is
<br>
&quot;/usr/local/openmpi-1.2.4&quot;
<br>
--with-tm=/usr/local/pbs CC=icc CXX=icpc F77=ifort FC=ifort \
<br>
--with-threads=posix --enable-mpi-threads
<br>
<p># Build GNU
<br>
cd $RPM_BUILD_DIR/openmpi-1.2.4_gnu
<br>
./configure --prefix /usr/local/openmpi-1.2.4/gnu
<br>
--with-openib=/usr/local/ofed \
<br>
--with-tm=/usr/local/pbs \
<br>
--with-threads=posix --enable-mpi-threads
<br>
<p># Note only 1 install section allowed
<br>
%install
<br>
# Install Intel
<br>
rm -rf /usr/local/openmpi-1.2.4/intel
<br>
mkdir -p /usr/local/openmpi-1.2.4/intel
<br>
cd $RPM_BUILD_DIR/openmpi-1.2.4_intel                 &lt;== unique
<br>
subdirectories from tar extract step above
<br>
make all install
<br>
<p># Install GNU
<br>
rm -rf /usr/local/openmpi-1.2.4/gnu
<br>
mkdir -p /usr/local/openmpi-1.2.4/gnu
<br>
cd $RPM_BUILD_DIR/openmpi-1.2.4_gnu             &lt;== unique subdirectories
<br>
from tar extract step above
<br>
make all install
<br>
<p>%files intel                                          &lt;==  I decided to go
<br>
with the &quot;kitchen sink&quot;, i.e., everything, so every directory is listed.
<br>
%doc $RPM_BUILD_DIR/openmpi-1.2.4_intel/README
<br>
/usr/local/openmpi-1.2.4/intel/bin
<br>
/usr/local/openmpi-1.2.4/intel/etc
<br>
/usr/local/openmpi-1.2.4/intel/include
<br>
/usr/local/openmpi-1.2.4/intel/lib
<br>
/usr/local/openmpi-1.2.4/intel/share
<br>
<p>%files gnu
<br>
%doc $RPM_BUILD_DIR/openmpi-1.2.4_gnu/README
<br>
/usr/local/openmpi-1.2.4/gnu/bin
<br>
/usr/local/openmpi-1.2.4/gnu/etc
<br>
/usr/local/openmpi-1.2.4/gnu/include
<br>
/usr/local/openmpi-1.2.4/gnu/lib
<br>
/usr/local/openmpi-1.2.4/gnu/share
<br>
<p><p>J.W. (Pat) O'Bryant,Jr.
<br>
Business Line Infrastructure
<br>
Technical Systems, HPC
<br>
Office: 713-431-7022
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Jim Kusznir&quot;                                                 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;jkusznir_at_gmai                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l.com&gt;                                                     To 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent by:                 &quot;Open MPI Users&quot;                     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users-bounces@           &lt;users_at_[hidden]&gt;                 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;open-mpi.org                                               cc 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12/30/07 11:50           [OMPI users] multi-compiler builds   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PM                       of OpenMPI (RPM)                     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please respond                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to                                                      
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI Users                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;users_at_open-mp                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i.org&gt;                                                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><p>Hi all:
<br>
<p>I'm trying to set up a ROCKS cluster (CentOS 4.5) with OpenMPI and
<br>
GCC, PGI, and Intel compilers.  My understanding is that OpenMPI must
<br>
be compiled with each compiler.  The result (or at least, the runtime
<br>
libs) must be in .rpm format, as that is required by ROCKS compute
<br>
node deployment system.  I am also using environment modules to manage
<br>
users' environment and selecting which version of OpenMPI/compiler.
<br>
<p>I have some questions, though.
<br>
1) am I correct in that OpenMPI needs to be complied with each
<br>
compiler that will be used with it?
<br>
<p>I am currently trying to make rpms using the included .spec file
<br>
(contrib/dist/linux/openmpi.spec, IIRC).
<br>
2) How do I use it to build against different compilers and end up
<br>
with non-colliding namespaces, etc?
<br>
I am currently using the following command line:
<br>
rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
<br>
1' --define 'build_all_in_one_rpm 0' --define 'configure_options
<br>
--with-tm=/opt/torque' openmpi.spec
<br>
I am currently concerned with differentiating same version compiled
<br>
with different compilers.  I origionally changed the name (--define
<br>
'_name openmpi-gcc'), but this broke the final phases of rpm building:
<br>
&nbsp;RPM build errors:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;File not found:
<br>
/var/tmp/openmpi-gcc-1.2.4-1-root/opt/openmpi-gcc/1.2.4/share/openmpi-gcc
<br>
I tried changing the version with &quot;gcc&quot; appended, but that also broke,
<br>
and as I thought about it more, I thought that would likely induce
<br>
headaches later with rpm only letting one version installed, etc.
<br>
<p>3) Will the resulting -runtime .rpms (for the different compiler
<br>
versions) coexist peacefully without any special environment munging
<br>
on the compute nodes, or do I need modules, etc. on all the compute
<br>
nodes as well?
<br>
<p>4) I've never really used pgi or intel's compiler.  I saw notes in the
<br>
rpm about build flag problems and &quot;use your normal optimizations and
<br>
flags&quot;, etc.  As I have no concept of &quot;normal&quot; for these compilers,
<br>
are there any guides or examples I should/could use for this?
<br>
<p>And of course, I'd be grateful for any hints/tricks/etc that I didn't
<br>
ask for, as I probably still don't fully know what I'm getting into
<br>
here....there's a lot of firsts here....
<br>
<p>Thanks!
<br>
--Jim
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4762.php">Amit Kumar Saha: "Re: [OMPI users] No output from mpirun"</a>
<li><strong>Previous message:</strong> <a href="4760.php">Varun R: "Re: [OMPI users] No output from mpirun"</a>
<li><strong>In reply to:</strong> <a href="4758.php">Jim Kusznir: "[OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4775.php">Jeff Squyres: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
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
