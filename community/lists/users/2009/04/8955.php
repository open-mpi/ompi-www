<?
$subject_val = "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 11:29:20 2009" -->
<!-- isoreceived="20090416152920" -->
<!-- sent="Thu, 16 Apr 2009 17:29:14 +0200" -->
<!-- isosent="20090416152914" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intel compiler libraries (was: libnuma issue)" -->
<!-- id="b87c422a0904160829m33e2e0ddt72960a851ac1a53f_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1ADCFDF0-6778-48CE-B9FF-26ECA83C8FAA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Intel compiler libraries (was: libnuma issue)<br>
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 11:29:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8956.php">Jeff Squyres: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Previous message:</strong> <a href="8954.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>In reply to:</strong> <a href="8947.php">Jeff Squyres: "[OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8956.php">Jeff Squyres: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Reply:</strong> <a href="8956.php">Jeff Squyres: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Reply:</strong> <a href="8957.php">Douglas Guptill: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr 16, 2009 at 3:04 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I believe that Nysal was referring to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;./configure CC=icc CXX=icpc F77=ifort FC=ifort LDFLAGS=-static-intel
</span><br>
<span class="quotelev1">&gt; --prefix=/usr
</span><br>
<p>I have completely removed openmpi-1.2.3 and reinstalled in /usr/local
<br>
from source on a Tyan S2895.
<br>
<p><span class="quotelev1">&gt;From my .bashrc:
</span><br>
<p>#For intel Fortran and C/C++ compilers
<br>
<p>. /opt/intel/fce/10.1.022/bin/ifortvars.sh
<br>
. /opt/intel/cce/10.1.022/bin/iccvars.sh
<br>
<p>#For openmpi
<br>
<p>if [ &quot;$LD_LIBRARY_PATH&quot; ] ; then
<br>
&nbsp;&nbsp;&nbsp;export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH:/usr/local/lib&quot;
<br>
else
<br>
&nbsp;&nbsp;&nbsp;export LD_LIBRARY_PATH=&quot;/usr/local/lib&quot;
<br>
fi
<br>
<p>===========
<br>
francesco_at_tya64:~$ echo $PATH
<br>
/opt/intel/cce/10.1.022/bin:/opt/intel/fce/10.1.022/bin:/usr/local/bin/vmd:/usr/local/chimera/bin:/usr/local/bin:/usr/bin:/bin:/usr/games:/home/francesco/hole2/exe:/usr/local/amber9/exe
<br>
francesco_at_tya64:~$
<br>
============
<br>
francesco_at_tya64:~$ echo $LD_LIBRARY_PATH
<br>
/opt/intel/mkl/10.1.2.024/lib/em64t:/opt/intel/cce/10.1.022/lib:/opt/intel/fce/10.1.022/lib:/usr/local/lib
<br>
francesco_at_tya64:~$
<br>
============
<br>
francesco_at_tya64:~$ ssh 192.168.1.33 env | sort
<br>
HOME=/home/francesco
<br>
LANG=en_US.UTF-8
<br>
LOGNAME=francesco
<br>
MAIL=/var/mail/francesco
<br>
PATH=/usr/local/bin:/usr/bin:/bin:/usr/bin/X11:/usr/games
<br>
PWD=/home/francesco
<br>
SHELL=/bin/bash
<br>
SHLVL=1
<br>
SSH_CLIENT=192.168.1.37 33941 22
<br>
SSH_CONNECTION=192.168.1.37 33941 192.168.1.33 22
<br>
USER=francesco
<br>
_=/usr/bin/env
<br>
francesco_at_tya64:~$
<br>
<p>where 192.168.1.33 is my remote desktop in the internal network and am
<br>
launching ssh from the Tyan where openmpi has been jiust installed
<br>
(also works if i do toward another parallel computer)
<br>
==============
<br>
francesco_at_tya64:~$ ssh 192.168.1.37 date
<br>
Thu Apr 16 17:12:38 CEST 2009
<br>
francesco_at_tya64:~$
<br>
<p>where 192.168.1.37 is the Tyan computer when I am doing with openmpi;
<br>
i.e., date passwordless shows that this computer knows also itself, as
<br>
it is true for all other computers on the internal network.
<br>
===============
<br>
<p>Now with openmpi-1.3.1:
<br>
<p>francesco_at_tya64:/usr/local/openmpi-1.3.1$ ./configure
<br>
CC=/opt/intel/cce/10.1.022/bin/icc
<br>
CXX=/opt/intel/cce/10.1.022/bin/icpc
<br>
F77=/opt/intel/fce/10.1.022/bin/ifort
<br>
FC=/opt/intel/fce/10.1.022/bin/ifort LDFLAGS=-static-intel
<br>
--with-libnuma=/usr --prefix=/usr/local
<br>
<p>no warnings
<br>
<p># make all install
<br>
<p>no warnings
<br>
<p>($ and # mean user and superuser, resp)
<br>
<p>with the connectity_c test, again the orte error: libimf.so not found.
<br>
<p>Please notice that I am not new to openmpi. I have worked for more
<br>
than a a couple of years without any problem on these same machines
<br>
with versions 1.2.3 and 1.2.6. With the latter, when i upgraded from
<br>
debian amd64 etch to the new stable amd64 lenny, amber was still
<br>
parallelized nicely. Then I changed disks of the raid1 to larger ones,
<br>
tried to recover the previous installations of codes and found these
<br>
broken on the new OS installation. Then, everything non parallelized
<br>
was easily fixed, while with openmpi-1.3.1 (i upgraded to this) the
<br>
issues described.
<br>
<p>As far as I have tested the OS is in order, and ssh, as shown above,
<br>
has no problem.
<br>
<p>Given my inexperience as system analyzer, I assume that I am messing
<br>
something. Unfortunately, i was unable to discover where I am messing.
<br>
An editor is waiting completion of calculations requested by a
<br>
referee, and I am unable to answer.
<br>
<p>thanks a lot for all you have tried to put me on the right road
<br>
<p>francesco
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This method makes editing your shell startup files unnecessary for running
</span><br>
<span class="quotelev1">&gt; on remote nodes, but you'll still need those files sourced for interactive
</span><br>
<span class="quotelev1">&gt; use of the intel compilers and/or for running intel-compiler-generated
</span><br>
<span class="quotelev1">&gt; executables locally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing that you're not sourcing the intel .sh files for
</span><br>
<span class="quotelev1">&gt; non-interactive logins. &#194;&#160;You'll need to check your shell startup files and
</span><br>
<span class="quotelev1">&gt; ensure that those sourcing lines are executed when you login to remote nodes
</span><br>
<span class="quotelev1">&gt; non-interactively. &#194;&#160;E.g.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;thisnode$ ssh othernode env | sort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shows the relevant stuff in your environment on the other node. &#194;&#160;Note that
</span><br>
<span class="quotelev1">&gt; this is different than
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;thisnode$ ssh othernode
</span><br>
<span class="quotelev1">&gt; &#194;&#160;othernode$ env | sort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 16, 2009, at 8:56 AM, Francesco Pietra wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did not work the way I implemented the suggestion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CC=/..cce..icc CXX/. cce..icpc F77=/..fce..ifort
</span><br>
<span class="quotelev2">&gt;&gt; FC=/..fce..ifort --with-libnuma=/usr --prefix=/usr --enable-static
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CC=/..cce..icc CXX/. cce..icpc F77=/..fce..ifort
</span><br>
<span class="quotelev2">&gt;&gt; FC=/..fce..ifort --with-libnuma=/usr --prefix=/usr
</span><br>
<span class="quotelev2">&gt;&gt; then editing Makefile by adding &quot;LDFLAGS = -static-intel&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CC=/..cce..icc CXX/. cce..icpc F77=/..fce..ifort
</span><br>
<span class="quotelev2">&gt;&gt; FC=/..fce..ifort --with-libnuma=/usr --prefix=/usr
</span><br>
<span class="quotelev2">&gt;&gt; then editing Makefile by replacing &quot;LDFLAGS&quot; with &quot;LDFLAGS =
</span><br>
<span class="quotelev2">&gt;&gt; -static-intel&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In all 3 cases orterun error: libimf.so not found (the library was
</span><br>
<span class="quotelev2">&gt;&gt; sourced with the *.sh intel scripts)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; francesco
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Apr 16, 2009 at 4:43 AM, Nysal Jan &lt;jnysal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; You could try statically linking the Intel-provided libraries. Use
</span><br>
<span class="quotelev3">&gt;&gt; &gt; LDFLAGS=-static-intel
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --Nysal
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Wed, 2009-04-15 at 21:03 +0200, Francesco Pietra wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Wed, Apr 15, 2009 at 8:39 PM, Prentice Bisbal &lt;prentice_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Francesco Pietra wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; I used --with-libnuma=/usr since Prentice Bisbal's suggestion and it
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; worked. Unfortunately, I found no way to fix the failure in finding
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; libimf.so when compiling openmpi-1.3.1 with intels, as you have seen
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; in other e-mail from me. And gnu compilers (which work well with
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; both
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; openmpi and the slower code of my application) are defeated by the
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; faster code of my application. With limited hardware resources, I
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; must
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt; rely on that 40% speeding up.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; To fix the libimf.so problem you need to include the path to Intel's
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; libimf.so in your LD_LIBRARY_PATH environment variable. On my system,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; I
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; installed v11.074 of the Intel compilers in /usr/local/intel, so my
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; libimf.so file is located here:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; /usr/local/intel/Compiler/11.0/074/lib/intel64/libimf.so
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; So I just add that to my LD_LIBRARY_PATH:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; LD_LIBRARY_PATH=/usr/local/intel/Compiler/11.0/074/lib/intel64:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; export LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Just a clarification: With my system I use the latest intels version
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 10, 10.1.2.024, and mkl 10.1.2.024 because it proved difficult to make
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; a debian package with version 11. At
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; /opt/intel/mkl/10.1.2.024/lib/em64t:/opt/intel/cce/10.1.022/lib:opt/intel/fce/10.1.022/lib:/usr/local/lib
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; (that /lib contains libimf.so)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; That results from sourcing in my .bashrc:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; . /opt/intel/fce/10.1.022/bin/ifortvars.sh
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; . /opt/intel/cce/10.1.022/bin/iccvars.sh
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &#194;&#160;Did you suppress that sourcing before exporting the LD_EXPORT_PATH to
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; the library at issue? Having so much turned around the proble, it is
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; not unlikely that I am messing myself.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; thanks
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; francesco
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Now I can run whatever programs need libimf.so without any problems.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; In
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; your case, you'll want to that before your make command.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Here's exactly what I use to compile OpenMPI with the Intel
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Compilers:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; export PATH=/usr/local/intel/Compiler/11.0/074/bin/intel64:$PATH
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; export
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; LD_LIBRARY_PATH=/usr/local/intel/Compiler/11.0/074/lib/intel64:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; ../configure CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; --prefix=/usr/local/openmpi-1.2.8/intel-11/x86_64 --disable-ipv6
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; --with-sge --with-openib --enable-static
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; --
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Prentice
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
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
<span class="quotelev3">&gt;&gt; &gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8956.php">Jeff Squyres: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Previous message:</strong> <a href="8954.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>In reply to:</strong> <a href="8947.php">Jeff Squyres: "[OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8956.php">Jeff Squyres: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Reply:</strong> <a href="8956.php">Jeff Squyres: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Reply:</strong> <a href="8957.php">Douglas Guptill: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
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
