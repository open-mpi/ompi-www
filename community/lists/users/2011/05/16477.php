<?
$subject_val = "Re: [OMPI users] USE mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 14:57:12 2011" -->
<!-- isoreceived="20110507185712" -->
<!-- sent="Sat, 07 May 2011 20:56:39 +0200" -->
<!-- isosent="20110507185639" -->
<!-- name="Steph Bredenhann" -->
<!-- email="s.j.bredenhann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] USE mpi" -->
<!-- id="1304794599.2633.13.camel_at_sjb-linux" -->
<!-- charset="utf-8" -->
<!-- inreplyto="35EEE2B6-0DE1-49D8-B317-2582D7D8424C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] USE mpi<br>
<strong>From:</strong> Steph Bredenhann (<em>s.j.bredenhann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-07 14:56:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16478.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16476.php">Jeff Squyres: "Re: [OMPI users] USE mpi"</a>
<li><strong>In reply to:</strong> <a href="16476.php">Jeff Squyres: "Re: [OMPI users] USE mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16478.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The output is:
<br>
<p>ifort -I/opt/openmpi-1.4.3/include -pthread -I/opt/openmpi-1.4.3/lib
<br>
-vec-report0 -O3 -r8 -assume byterecl 3k-1.for -c
<br>
done
<br>
<p><pre>
---
Steph Bredenhann 
On Sat, 2011-05-07 at 14:46 -0400, Jeff Squyres wrote:
&gt; What is the output of 
&gt; 
&gt; /usr/bin/mpif90  -vec-report0 -O3 -r8 -assume byterecl $FILENAME -c --showme
&gt; 
&gt; And
&gt; 
&gt; ompi_info | grep 90
&gt; 
&gt; 
&gt; 
&gt; On May 7, 2011, at 2:40 PM, Steph Bredenhann wrote:
&gt; 
&gt; &gt; Thanks for the quick feedback.
&gt; &gt; 
&gt; &gt; My compile line is:
&gt; &gt; 
&gt; &gt; /usr/bin/mpif90  -vec-report0 -O3 -r8 -assume byterecl $FILENAME -c
&gt; &gt; 
&gt; &gt; I have built OMPI with IFORT.
&gt; &gt; 
&gt; &gt; Regards
&gt; &gt; 
&gt; &gt; ---
&gt; &gt; Steph Bredenhann 
&gt; &gt; 
&gt; &gt; On Sat, 2011-05-07 at 14:26 -0400, Jeff Squyres wrote:
&gt; &gt;&gt; What is the compile line that you are using to compile your application?
&gt; &gt;&gt; 
&gt; &gt;&gt; If you use &quot;mpif90 ...&quot;, then the right compiler directive should be automatically added such that the mpi module will be found (assuming that your OMPI was installed with F90 support, that is).
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; On May 7, 2011, at 2:09 PM, Steph Bredenhann wrote:
&gt; &gt;&gt; 
&gt; &gt;&gt; &gt; I have compiled all my fortran source files successfully with openmpi 1.4.3 wrapper for ifort on Ubuntu 10.10, except the main progran file that contains the &quot;include mpif.h&quot; statement. It seems that the &quot;include mpif.h&quot; is deprecated and that one should now use &quot;USE mpi&quot;. However, when compiling with this I get the following message:
&gt; &gt;&gt; &gt; 
&gt; &gt;&gt; &gt; Compile...
&gt; &gt;&gt; &gt; 3k-1.for(2): error #7002: Error in opening the compiled module file.  Check INCLUDE paths.   [MPI]
&gt; &gt;&gt; &gt;       USE mpi
&gt; &gt;&gt; &gt; ----------^
&gt; &gt;&gt; &gt; compilation aborted for 3k-1.for (code 1)
&gt; &gt;&gt; &gt; done
&gt; &gt;&gt; &gt; 
&gt; &gt;&gt; &gt; &quot;/usr/include/mpi&quot; is included in the variable $INCLUDE
&gt; &gt;&gt; &gt; 
&gt; &gt;&gt; &gt; Could someone please advise on the next step to take?
&gt; &gt;&gt; &gt; 
&gt; &gt;&gt; &gt; Thanks
&gt; &gt;&gt; &gt; 
&gt; &gt;&gt; &gt; 
&gt; &gt;&gt; &gt; 
&gt; &gt;&gt; &gt; -- 
&gt; &gt;&gt; &gt; Steph Bredenhann 
&gt; &gt;&gt; &gt; 
&gt; &gt;&gt; &gt; _______________________________________________
&gt; &gt;&gt; &gt; users mailing list
&gt; &gt;&gt; &gt; 
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; 
&gt; &gt;&gt; &gt; 
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16477/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16478.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16476.php">Jeff Squyres: "Re: [OMPI users] USE mpi"</a>
<li><strong>In reply to:</strong> <a href="16476.php">Jeff Squyres: "Re: [OMPI users] USE mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16478.php">Steph Bredenhann: "Re: [OMPI users] USE mpi"</a>
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
