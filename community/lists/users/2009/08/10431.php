<?
$subject_val = "Re: [OMPI users] OPEN MPI with self";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 10:38:05 2009" -->
<!-- isoreceived="20090819143805" -->
<!-- sent="Wed, 19 Aug 2009 10:37:51 -0400" -->
<!-- isosent="20090819143751" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPEN MPI with self" -->
<!-- id="D76AA911-4DF3-4F33-99C7-9AA3E5CC2E4B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="798118.88905.qm_at_web28307.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPEN MPI with self<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 10:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10432.php">Ralph Castain: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>Previous message:</strong> <a href="10430.php">Jean Potsam: "[OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>In reply to:</strong> <a href="10410.php">Jean Potsam: "[OMPI users] OPEN MPI with self"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 18, 2009, at 11:36 AM, Jean Potsam wrote:
<br>
<p><span class="quotelev1">&gt; Dear ALL,
</span><br>
<span class="quotelev1">&gt;                 I am trying to checkpoint MPI application using the  
</span><br>
<span class="quotelev1">&gt; self  component. I had a look at the OPEN MPI FT user's guide Draft  
</span><br>
<span class="quotelev1">&gt; 1.4. but is still unsure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed openmpi as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jean$ ./configure --prefix=/home/jean/openmpi/  --enable-debug -- 
</span><br>
<span class="quotelev1">&gt; enable-mpi-profile --enable-mpi-cxx  --enable-binaries --enable- 
</span><br>
<span class="quotelev1">&gt; trace --enable-static=yes --enable-debug --with-devel-headers=1 -- 
</span><br>
<span class="quotelev1">&gt; with-mpi-param-check=always --with-ft=cr --enable-ft-thread -- 
</span><br>
<span class="quotelev1">&gt; enable-mpi-threads=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jean$ make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MY questions are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Q1) Have I properly configured openmpi with self?
</span><br>
<p>Yes it looks like you have configured correctly. To double check you  
<br>
can look at the config.log file in the build directory, and look for  
<br>
the following lines (it should say 'yes'):
<br>
----------------
<br>
configure:87103: checking if MCA component crs:self can compile
<br>
configure:87105: result: yes
<br>
----------------
<br>
<p>I recently fixed a number of bugs with the 'self' CRS functionality.  
<br>
So you will want to make sure you are using a recent version of  
<br>
either the development trunk (anything after r21777) or the v1.3  
<br>
branch (anything after r21798).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the document, it is said:
</span><br>
<span class="quotelev1">&gt; &quot;To be absolutely clear: these functions are to be provided by the  
</span><br>
<span class="quotelev1">&gt; application - they are not included in the open mpi library&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; q2) Does this means that i will have to write my own checkpoint,  
</span><br>
<span class="quotelev1">&gt; continue and restart functions and fucntion calls?
</span><br>
<p>The 'self' checkpointer requires the application to write its own  
<br>
checkpoint, continue, and restart functions. These functions must  
<br>
have a precise signature since they are called by Open MPI. In  
<br>
particular they need to look like:
<br>
&nbsp;&nbsp;&nbsp;int opal_crs_self_user_checkpoint(char **restart_cmd);
<br>
&nbsp;&nbsp;&nbsp;int opal_crs_self_user_continue(void);
<br>
&nbsp;&nbsp;&nbsp;int opal_crs_self_user_restart(void);
<br>
<p>The 'crs_self_prefix' MCA parameter will allow you to customize the  
<br>
function names a bit. For example:
<br>
&nbsp;&nbsp;&nbsp;shell$ mpirun -np 2 -am ft-enable-cr -mca crs_self_prefix  
<br>
my_personal my-app
<br>
<p>Will cause Open MPI to look for functions with the following signature:
<br>
&nbsp;&nbsp;&nbsp;int my_personal_checkpoint(char **restart_cmd);
<br>
&nbsp;&nbsp;&nbsp;int my_personal_continue(void);
<br>
&nbsp;&nbsp;&nbsp;int my_personal_restart(void);
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Q3) has anyone experienced with self checkpointing? I would really  
</span><br>
<span class="quotelev1">&gt; appreaciate if a guide could be available.
</span><br>
<p>The C/R FT User's Guide is the only guide that I know of out there. I  
<br>
attached a sample program that takes advantage of the 'self' CRS system.
<br>
<p>To compile:
<br>
&nbsp;&nbsp;&nbsp;mpicc personal-cr.c -export -export-dynamic -o personal-cr
<br>
<p>To run with default function names:
<br>
&nbsp;&nbsp;&nbsp;shell$ mpirun -np 2 -am ft-enable-cr personal-cr
<br>
<p>To run with custom function names:
<br>
&nbsp;&nbsp;&nbsp;shell$ mpirun -np 2 -am ft-enable-cr -mca crs_self_prefix  
<br>
my_personal personal-cr
<br>
<p><p>-- Josh
<br>
<p><p>

<br><p>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; JEan
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
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10431/personal-cr.c">personal-cr.c</a>
</ul>
<!-- attachment="personal-cr.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10432.php">Ralph Castain: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>Previous message:</strong> <a href="10430.php">Jean Potsam: "[OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>In reply to:</strong> <a href="10410.php">Jean Potsam: "[OMPI users] OPEN MPI with self"</a>
<!-- nextthread="start" -->
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
