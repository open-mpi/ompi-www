<?
$subject_val = "Re: [OMPI users] Installation Problems with Openmpi-1.2.9";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 15:22:43 2009" -->
<!-- isoreceived="20090312192243" -->
<!-- sent="Thu, 12 Mar 2009 12:22:42 -0700" -->
<!-- isosent="20090312192242" -->
<!-- name="Joshua Bernstein" -->
<!-- email="jbernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installation Problems with Openmpi-1.2.9" -->
<!-- id="287289EA-8BBE-4B9A-9074-9ACE991709A5_at_penguincomputing.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="61b264610903121213i746ac630xcc6eb1271adb5280_at_mail.gmail.com" -->
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
<strong>From:</strong> Joshua Bernstein (<em>jbernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-12 15:22:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8412.php">George Bosilca: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8410.php">Amos Leffler: "[OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>In reply to:</strong> <a href="8410.php">Amos Leffler: "[OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8426.php">Amos Leffler: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Reply:</strong> <a href="8426.php">Amos Leffler: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Amos,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It looks like you do not have permission to make the directory /usr/ 
<br>
local/etc. Either you need to run the make all install as root, so  
<br>
you have permission to that directory, or you need to use the -- 
<br>
prefix=&lt;path&gt; option to configure so that the installation gets  
<br>
installed into a path where you have permission.
<br>
<p>-Joshua Bernstein
<br>
Senior Software Engineer
<br>
Penguin Computing
<br>
<p>On Mar 12, 2009, at 12:13 PM, Amos Leffler wrote:
<br>
<p><span class="quotelev1">&gt; Hello Forum,
</span><br>
<span class="quotelev1">&gt;           Attached is a file of my installation and trying examples
</span><br>
<span class="quotelev1">&gt; for openmpi-1.2.9 which were not successful. Hopefully the problem is
</span><br>
<span class="quotelev1">&gt; a simple one and obvious to a more experienced user.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am trying to install and test openmpi-1.2.9. I found that I
</span><br>
<span class="quotelev1">&gt; could not use the Intel 11.0/.081 C++
</span><br>
<span class="quotelev1">&gt; and Fortran compilers although I think the problem is with these
</span><br>
<span class="quotelev1">&gt; compilers not openmpi.  The openmpi-
</span><br>
<span class="quotelev1">&gt; 1.2.9 did compile successfully with the internal compilers of SuSE
</span><br>
<span class="quotelev1">&gt; 10.2.  However, at the end of the
</span><br>
<span class="quotelev1">&gt; &quot;make all install&quot; command output I noted that some of the make
</span><br>
<span class="quotelev1">&gt; commands did not run  properly as
</span><br>
<span class="quotelev1">&gt; shown below.
</span><br>
<span class="quotelev1">&gt;     I tried to run some of the simple examples and was not successful.
</span><br>
<span class="quotelev1">&gt;  For hello_c.c I received the
</span><br>
<span class="quotelev1">&gt; message &quot;mpicc not found&quot;.  Is there a simple workaround?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/ 
</span><br>
<span class="quotelev1">&gt; libltdl'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/ 
</span><br>
<span class="quotelev1">&gt; libltdl'
</span><br>
<span class="quotelev1">&gt; Making install in asm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/opal/ 
</span><br>
<span class="quotelev1">&gt; asm'
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/opal/ 
</span><br>
<span class="quotelev1">&gt; asm'
</span><br>
<span class="quotelev1">&gt; make[3]: Nothing to be done for `install-exec-am'.
</span><br>
<span class="quotelev1">&gt; make[3]: Nothing to be done for `install-data-am'.
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/asm'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/asm'
</span><br>
<span class="quotelev1">&gt; Making install in etc
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/opal/ 
</span><br>
<span class="quotelev1">&gt; etc'
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/opal/ 
</span><br>
<span class="quotelev1">&gt; etc'
</span><br>
<span class="quotelev1">&gt; test -z &quot;/usr/local/etc&quot; || /bin/mkdir -p &quot;/usr/local/etc&quot;
</span><br>
<span class="quotelev1">&gt; /bin/mkdir: cannot create directory `/usr/local/etc': Permission  
</span><br>
<span class="quotelev1">&gt; denied
</span><br>
<span class="quotelev1">&gt; make[3]: *** [install-sysconfDATA] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/etc'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/etc'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt;                                                        Amos  
</span><br>
<span class="quotelev1">&gt; Leffler&lt;install.output&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="8412.php">George Bosilca: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8410.php">Amos Leffler: "[OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>In reply to:</strong> <a href="8410.php">Amos Leffler: "[OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8426.php">Amos Leffler: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Reply:</strong> <a href="8426.php">Amos Leffler: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
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
