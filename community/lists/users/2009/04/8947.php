<?
$subject_val = "[OMPI users] Intel compiler libraries (was: libnuma issue)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 09:04:59 2009" -->
<!-- isoreceived="20090416130459" -->
<!-- sent="Thu, 16 Apr 2009 09:04:51 -0400" -->
<!-- isosent="20090416130451" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI users] Intel compiler libraries (was: libnuma issue)" -->
<!-- id="1ADCFDF0-6778-48CE-B9FF-26ECA83C8FAA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b87c422a0904160556w28dc5966pf62c2f5ee7451e55_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Intel compiler libraries (was: libnuma issue)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 09:04:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8948.php">Ralph Castain: "Re: [OMPI users] default current working directory of started application"</a>
<li><strong>Previous message:</strong> <a href="8946.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<li><strong>In reply to:</strong> <a href="8946.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8955.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Reply:</strong> <a href="8955.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe that Nysal was referring to
<br>
<p>&nbsp;&nbsp;&nbsp;./configure CC=icc CXX=icpc F77=ifort FC=ifort LDFLAGS=-static- 
<br>
intel --prefix=/usr
<br>
<p>This method makes editing your shell startup files unnecessary for  
<br>
running on remote nodes, but you'll still need those files sourced for  
<br>
interactive use of the intel compilers and/or for running intel- 
<br>
compiler-generated executables locally.
<br>
<p>I'm guessing that you're not sourcing the intel .sh files for non- 
<br>
interactive logins.  You'll need to check your shell startup files and  
<br>
ensure that those sourcing lines are executed when you login to remote  
<br>
nodes non-interactively.  E.g.:
<br>
<p>&nbsp;&nbsp;&nbsp;thisnode$ ssh othernode env | sort
<br>
<p>shows the relevant stuff in your environment on the other node.  Note  
<br>
that this is different than
<br>
<p>&nbsp;&nbsp;&nbsp;thisnode$ ssh othernode
<br>
&nbsp;&nbsp;&nbsp;othernode$ env | sort
<br>
<p><p><p><p>On Apr 16, 2009, at 8:56 AM, Francesco Pietra wrote:
<br>
<p><span class="quotelev1">&gt; Did not work the way I implemented the suggestion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=/..cce..icc CXX/. cce..icpc F77=/..fce..ifort
</span><br>
<span class="quotelev1">&gt; FC=/..fce..ifort --with-libnuma=/usr --prefix=/usr --enable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=/..cce..icc CXX/. cce..icpc F77=/..fce..ifort
</span><br>
<span class="quotelev1">&gt; FC=/..fce..ifort --with-libnuma=/usr --prefix=/usr
</span><br>
<span class="quotelev1">&gt; then editing Makefile by adding &quot;LDFLAGS = -static-intel&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=/..cce..icc CXX/. cce..icpc F77=/..fce..ifort
</span><br>
<span class="quotelev1">&gt; FC=/..fce..ifort --with-libnuma=/usr --prefix=/usr
</span><br>
<span class="quotelev1">&gt; then editing Makefile by replacing &quot;LDFLAGS&quot; with &quot;LDFLAGS = -static- 
</span><br>
<span class="quotelev1">&gt; intel&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In all 3 cases orterun error: libimf.so not found (the library was
</span><br>
<span class="quotelev1">&gt; sourced with the *.sh intel scripts)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; francesco
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 16, 2009 at 4:43 AM, Nysal Jan &lt;jnysal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; You could try statically linking the Intel-provided libraries. Use
</span><br>
<span class="quotelev2">&gt; &gt; LDFLAGS=-static-intel
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --Nysal
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 2009-04-15 at 21:03 +0200, Francesco Pietra wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, Apr 15, 2009 at 8:39 PM, Prentice Bisbal  
</span><br>
<span class="quotelev1">&gt; &lt;prentice_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Francesco Pietra wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I used --with-libnuma=/usr since Prentice Bisbal's suggestion  
</span><br>
<span class="quotelev1">&gt; and it
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; worked. Unfortunately, I found no way to fix the failure in  
</span><br>
<span class="quotelev1">&gt; finding
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; libimf.so when compiling openmpi-1.3.1 with intels, as you  
</span><br>
<span class="quotelev1">&gt; have seen
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; in other e-mail from me. And gnu compilers (which work well  
</span><br>
<span class="quotelev1">&gt; with both
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; openmpi and the slower code of my application) are defeated by  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; faster code of my application. With limited hardware  
</span><br>
<span class="quotelev1">&gt; resources, I must
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; rely on that 40% speeding up.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; To fix the libimf.so problem you need to include the path to  
</span><br>
<span class="quotelev1">&gt; Intel's
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; libimf.so in your LD_LIBRARY_PATH environment variable. On my  
</span><br>
<span class="quotelev1">&gt; system, I
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; installed v11.074 of the Intel compilers in /usr/local/intel,  
</span><br>
<span class="quotelev1">&gt; so my
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; libimf.so file is located here:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; /usr/local/intel/Compiler/11.0/074/lib/intel64/libimf.so
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; So I just add that to my LD_LIBRARY_PATH:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; LD_LIBRARY_PATH=/usr/local/intel/Compiler/11.0/074/lib/ 
</span><br>
<span class="quotelev1">&gt; intel64:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; export LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Just a clarification: With my system I use the latest intels  
</span><br>
<span class="quotelev1">&gt; version
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 10, 10.1.2.024, and mkl 10.1.2.024 because it proved difficult to  
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a debian package with version 11. At
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /opt/intel/mkl/10.1.2.024/lib/em64t:/opt/intel/cce/10.1.022/ 
</span><br>
<span class="quotelev1">&gt; lib:opt/intel/fce/10.1.022/lib:/usr/local/lib
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (that /lib contains libimf.so)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That results from sourcing in my .bashrc:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; . /opt/intel/fce/10.1.022/bin/ifortvars.sh
</span><br>
<span class="quotelev3">&gt; &gt;&gt; . /opt/intel/cce/10.1.022/bin/iccvars.sh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Did you suppress that sourcing before exporting the  
</span><br>
<span class="quotelev1">&gt; LD_EXPORT_PATH to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the library at issue? Having so much turned around the proble, it  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; not unlikely that I am messing myself.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; francesco
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Now I can run whatever programs need libimf.so without any  
</span><br>
<span class="quotelev1">&gt; problems. In
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; your case, you'll want to that before your make command.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Here's exactly what I use to compile OpenMPI with the Intel  
</span><br>
<span class="quotelev1">&gt; Compilers:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; export PATH=/usr/local/intel/Compiler/11.0/074/bin/intel64:$PATH
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; export
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; LD_LIBRARY_PATH=/usr/local/intel/Compiler/11.0/074/lib/ 
</span><br>
<span class="quotelev1">&gt; intel64:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ../configure CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; --prefix=/usr/local/openmpi-1.2.8/intel-11/x86_64 --disable-ipv6
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; --with-sge --with-openib --enable-static
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Prentice
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8948.php">Ralph Castain: "Re: [OMPI users] default current working directory of started application"</a>
<li><strong>Previous message:</strong> <a href="8946.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<li><strong>In reply to:</strong> <a href="8946.php">Francesco Pietra: "Re: [OMPI users] libnuma issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8955.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>Reply:</strong> <a href="8955.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
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
