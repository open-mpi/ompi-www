<?
$subject_val = "Re: [OMPI users] Installation Problems with Openmpi-1.2.9";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 16:25:18 2009" -->
<!-- isoreceived="20090313202518" -->
<!-- sent="Fri, 13 Mar 2009 16:25:07 -0400" -->
<!-- isosent="20090313202507" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installation Problems with Openmpi-1.2.9" -->
<!-- id="6F6C3935-04E3-4839-A683-AEE0A8D1760F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="61b264610903131142k3a332992p9757b8cdacf3da42_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Installation Problems with Openmpi-1.2.9<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 16:25:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8430.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Previous message:</strong> <a href="8428.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8426.php">Amos Leffler: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8466.php">Amos Leffler: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Reply:</strong> <a href="8466.php">Amos Leffler: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 13, 2009, at 2:42 PM, Amos Leffler wrote:
<br>
<p><span class="quotelev1">&gt;       Thanks for your advice.  I went back carefully through my PATH
</span><br>
<span class="quotelev1">&gt; file and corrected that so that I compiled openmpi-1.2.9 with the
</span><br>
<span class="quotelev1">&gt; Intel compilers seemingly without errors.  However, the simple test
</span><br>
<span class="quotelev1">&gt; examples wont run with the same error:
</span><br>
<span class="quotelev1">&gt; ~/Desktop/openmpi-1.2.9/examples&gt; mpicc hello_c.c
</span><br>
<span class="quotelev1">&gt; mpicc: error while loading shared libraries: libopen-pal.so.0: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; I get similar results with the other examples.  Here is where I need  
</span><br>
<span class="quotelev1">&gt; help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That's quite odd.
<br>
<p>What does &quot;ldd mpicc&quot; show you?  (you may need to use the full path of  
<br>
mpicc)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Amos Leffler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 12, 2009 at 12:22 PM, Joshua Bernstein
</span><br>
<span class="quotelev1">&gt; &lt;jbernstein_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Amos,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        It looks like you do not have permission to make the  
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/etc. Either you need to run the make all install as  
</span><br>
<span class="quotelev1">&gt; root, so you
</span><br>
<span class="quotelev2">&gt; &gt; have permission to that directory, or you need to use the -- 
</span><br>
<span class="quotelev1">&gt; prefix=&lt;path&gt;
</span><br>
<span class="quotelev2">&gt; &gt; option to configure so that the installation gets installed into a  
</span><br>
<span class="quotelev1">&gt; path
</span><br>
<span class="quotelev2">&gt; &gt; where you have permission.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Joshua Bernstein
</span><br>
<span class="quotelev2">&gt; &gt; Senior Software Engineer
</span><br>
<span class="quotelev2">&gt; &gt; Penguin Computing
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 12, 2009, at 12:13 PM, Amos Leffler wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello Forum,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          Attached is a file of my installation and trying examples
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for openmpi-1.2.9 which were not successful. Hopefully the  
</span><br>
<span class="quotelev1">&gt; problem is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a simple one and obvious to a more experienced user.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    I am trying to install and test openmpi-1.2.9. I found that I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; could not use the Intel 11.0/.081 C++
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and Fortran compilers although I think the problem is with these
</span><br>
<span class="quotelev3">&gt; &gt;&gt; compilers not openmpi.  The openmpi-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.2.9 did compile successfully with the internal compilers of SuSE
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 10.2.  However, at the end of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;make all install&quot; command output I noted that some of the make
</span><br>
<span class="quotelev3">&gt; &gt;&gt; commands did not run  properly as
</span><br>
<span class="quotelev3">&gt; &gt;&gt; shown below.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    I tried to run some of the simple examples and was not  
</span><br>
<span class="quotelev1">&gt; successful.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  For hello_c.c I received the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; message &quot;mpicc not found&quot;.  Is there a simple workaround?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[3]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/ 
</span><br>
<span class="quotelev1">&gt; libltdl'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/ 
</span><br>
<span class="quotelev1">&gt; libltdl'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Making install in asm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/ 
</span><br>
<span class="quotelev1">&gt; opal/asm'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[3]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/ 
</span><br>
<span class="quotelev1">&gt; opal/asm'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[3]: Nothing to be done for `install-exec-am'.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[3]: Nothing to be done for `install-data-am'.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[3]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/ 
</span><br>
<span class="quotelev1">&gt; asm'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/ 
</span><br>
<span class="quotelev1">&gt; asm'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Making install in etc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/ 
</span><br>
<span class="quotelev1">&gt; opal/etc'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[3]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/ 
</span><br>
<span class="quotelev1">&gt; opal/etc'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; test -z &quot;/usr/local/etc&quot; || /bin/mkdir -p &quot;/usr/local/etc&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /bin/mkdir: cannot create directory `/usr/local/etc': Permission  
</span><br>
<span class="quotelev1">&gt; denied
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[3]: *** [install-sysconfDATA] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[3]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/ 
</span><br>
<span class="quotelev1">&gt; etc'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/ 
</span><br>
<span class="quotelev1">&gt; etc'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[1]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Any help would be appreciated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                                       Amos
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev1">&gt; Leffler&lt;install.output&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="8430.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Previous message:</strong> <a href="8428.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8426.php">Amos Leffler: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8466.php">Amos Leffler: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Reply:</strong> <a href="8466.php">Amos Leffler: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
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
