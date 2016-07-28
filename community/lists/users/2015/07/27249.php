<?
$subject_val = "Re: [OMPI users] ompi_info in 1.8.x";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 13:05:15 2015" -->
<!-- isoreceived="20150702170515" -->
<!-- sent="Thu, 2 Jul 2015 17:05:12 +0000" -->
<!-- isosent="20150702170512" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi_info in 1.8.x" -->
<!-- id="F4374335-5396-4CFD-B36E-7C5656BFF9B6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C02BC8C11F3E684DBAC6ECF9180BABF2B44F1A0A_at_OC11EXPO30.exchange.mit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi_info in 1.8.x<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-02 13:05:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27250.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Previous message:</strong> <a href="27248.php">Tom Coles: "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>In reply to:</strong> <a href="27248.php">Tom Coles: "Re: [OMPI users] ompi_info in 1.8.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27250.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Reply:</strong> <a href="27250.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 2, 2015, at 12:20 PM, Tom Coles &lt;tcoles_at_[hidden]&lt;mailto:tcoles_at_[hidden]&gt;&gt; wrote:
<br>
<p>I see, thanks for the quick reply.
<br>
<p>In light of this, I'd like to suggest an update to the FAQ entry at <a href="http://www.open-mpi.org/faq/?category=tuning#available-mca-params">http://www.open-mpi.org/faq/?category=tuning#available-mca-params</a>
<br>
I just noticed that this is covered in question 6, but it is not clear when reading question 8.
<br>
<p>Thanks for the pointer.
<br>
<p>I actually started freshening the FAQ data (including topics like this) a few weeks ago, but haven't finished it yet -- it's a low priority-edit kind of thing; I do it while waiting for lengthy compiles, etc.  Here's what the new question 8 looks like (it's now question 9):
<br>
<p>9. How do I know what MCA parameters are available?
<br>
<p><p>The ompi_info command can list the parameters for a given component, all the parameters for a specific framework, or all parameters. Most parameters contain a description of the parameter; all will show the parameter's current value.
<br>
<p>For example:
<br>
<p>1
<br>
2
<br>
3
<br>
4
<br>
5
<br>
6
<br>
7
<br>
<p><p><p># Starting with Open MPI v1.7, you must use &quot;--level 9&quot; to see
<br>
# all the MCA parameters (the default is &quot;--level 1&quot;):
<br>
shell$ ompi_info --param all all --level 9
<br>
<p># Before Open MPI v1.7, the &quot;--level&quot; command line options
<br>
# did not exist; do not use it.
<br>
shell$ ompi_info --param all all
<br>
<p><p>Shows all the MCA parameters for all components that ompi_info finds, whereas:
<br>
<p>1
<br>
2
<br>
3
<br>
<p><p><p># All remaining examples assume Open MPI v1.7 or later (i.e.,
<br>
# they assume the use of the &quot;--level&quot; command line option)
<br>
shell$ ompi_info --param btl all --level 9
<br>
<p><p>Shows all the MCA parameters for all BTL components that ompi_info finds. Finally:
<br>
<p>1
<br>
<p><p><p>shell$ ompi_info --param btl tcp --level 9
<br>
<p><p>Shows all the MCA parameters for the TCP BTL component.
<br>
<p>I'll try to get it finished soon.
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27249/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27250.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Previous message:</strong> <a href="27248.php">Tom Coles: "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>In reply to:</strong> <a href="27248.php">Tom Coles: "Re: [OMPI users] ompi_info in 1.8.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27250.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Reply:</strong> <a href="27250.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
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
