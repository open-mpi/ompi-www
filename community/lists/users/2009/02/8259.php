<?
$subject_val = "Re: [OMPI users] libmpi_f90.so not being built";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 28 08:46:24 2009" -->
<!-- isoreceived="20090228134624" -->
<!-- sent="Sat, 28 Feb 2009 08:46:18 -0500" -->
<!-- isosent="20090228134618" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libmpi_f90.so not being built" -->
<!-- id="816720CB-A6DB-4B3F-B979-1EE3FCD90B9C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A7DE83.2030207_at_coas.oregonstate.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] libmpi_f90.so not being built<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-28 08:46:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8260.php">Jeff Squyres: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>Previous message:</strong> <a href="8258.php">jody: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>In reply to:</strong> <a href="8236.php">Tiago Silva: "Re: [OMPI users] libmpi_f90.so not being built"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8271.php">Tiago Silva: "[OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm; something is weird here.
<br>
<p>It looks like you used a different configure command line between your  
<br>
first and second emails -- one seems to be the &quot;small&quot; f90 size and  
<br>
one seems to be the &quot;medium&quot; f90 size.  There's different errors, too  
<br>
-- the first one was:
<br>
<p>ERROR --  Could not find specified object file libmpi_f90.so.0.
<br>
<p>The second one was:
<br>
<p>ERROR --  Could not find specified object file /opt/openmpi-1.3_lfc/lib.
<br>
<p>I don't quite understand either of these errors:
<br>
<p>1. The first one seems to be referring to the the *output* name of the  
<br>
file; I'm not sure why it's saying that it can't find the file.   
<br>
Specifically: the file shouldn't exist yet because that's the file we  
<br>
want the linker to create as the output.
<br>
<p>2. The second one seems to refer to a directory in the destination  
<br>
tree -- it's not an object file in the build tree.  I only see that  
<br>
directory listed in the linker command that generated the error as an - 
<br>
rpath argument.  Does the lfc compiler complain/error if you -rpath a  
<br>
directory that does not yet exist?  That would be darn weird.
<br>
<p>Just curious -- are you running &quot;make&quot;, &quot;make all&quot;, or &quot;make install&quot;?
<br>
<p><p><p>On Feb 27, 2009, at 7:37 AM, Tiago Silva wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ok, here is the complete output in the tgz file attached. The output  
</span><br>
<span class="quotelev1">&gt; is slightly different as I am now only using &quot;make all&quot; and not  
</span><br>
<span class="quotelev1">&gt; installing. I did a full &quot;make clean&quot; and &quot;rm -fr &lt;prefix&gt;/*&quot; and  
</span><br>
<span class="quotelev1">&gt; the &lt;prefix&gt; already exists but is empty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; &lt;ts-output.tgz&gt;&lt;mime-attachment.txt&gt;
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
<li><strong>Next message:</strong> <a href="8260.php">Jeff Squyres: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>Previous message:</strong> <a href="8258.php">jody: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>In reply to:</strong> <a href="8236.php">Tiago Silva: "Re: [OMPI users] libmpi_f90.so not being built"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8271.php">Tiago Silva: "[OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
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
