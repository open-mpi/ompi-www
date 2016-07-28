<?
$subject_val = "Re: [OMPI devel] RFC: Well-known mca parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 07:17:51 2014" -->
<!-- isoreceived="20140425111751" -->
<!-- sent="Fri, 25 Apr 2014 07:18:51 -0400" -->
<!-- isosent="20140425111851" -->
<!-- name="Stephen Poole" -->
<!-- email="swpoole_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Well-known mca parameters" -->
<!-- id="535A449B.2060506_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="83C5C92C-B231-4F5E-8E18-243A1EF29DB4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Well-known mca parameters<br>
<strong>From:</strong> Stephen Poole (<em>swpoole_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-25 07:18:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14614.php">Adrian Reber: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14612.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>In reply to:</strong> <a href="14612.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14617.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Reply:</strong> <a href="14617.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Although the one Mike suggests would be much easier for &quot;end users&quot;, I
<br>
think that in this
<br>
case, if the end user is more of a Linux newbie, they would have scripts
<br>
written for them,
<br>
that the admins use or will be handed to them. Either way would be a
<br>
great addition for
<br>
system/build/runtime verification of the installed libraries.
<br>
<p>Best
<br>
Steve...
<br>
<p><p>On 4/25/14, 7:13 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Apr 25, 2014, at 7:01 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_info --all --parsable | egrep ':(compile|run)time_version'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yep, this is much better, but I don`t think we should count on
</span><br>
end-user to be unix regex guru.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought you said this was for support scripts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Users can easily do this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ompi_info --all --parsable | grep time_version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or even
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ompi_info --all --parsable | grep _version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or even
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ompi_info --all --parsable | grep version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ideally, following would be much user-friendlier:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --all --parsable --print-sys-libs-versions
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Apr 25, 2014 at 1:32 PM, Jeff Squyres (jsquyres)
</span><br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt;&gt; On Apr 24, 2014, at 1:38 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** prefix each well-known MCA param with &quot;print_&quot;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I like the overall idea of this RFC, but I'm not wild about this
</span><br>
specific word &quot;print&quot; -- it seems weird.  All the MCA parameters are
<br>
*printed* -- the word &quot;print&quot; doesn't really distinguish anything here.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (I know I'm just harping on a word, but I think it's an important
</span><br>
word here... :-) )
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Got a better suggestion, perchance?  (I don't, offhand...)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** Define two well-known mca parameters indicating external library
</span><br>
runtime and compiletime versions, i.e.:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; print_compiletime_version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; print_runtime_version
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The following command will show all exposed well-known mca params
</span><br>
from all components:
<br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info --parsable -l 9 |grep &quot;:print_&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How about changing this a bit (hoping my regexp syntax is correct at
</span><br>
6:30am before coffee...):
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --all --parsable | egrep ':(compile|run)time_version'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then the &quot;print_&quot; prefix isn't needed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14610.php">http://www.open-mpi.org/community/lists/devel/2014/04/14610.php</a>
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14611.php">http://www.open-mpi.org/community/lists/devel/2014/04/14611.php</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG/MacGPG2 v2.0.22 (Darwin)
<br>
Comment: GPGTools - <a href="http://gpgtools.org">http://gpgtools.org</a>
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iQIcBAEBAgAGBQJTWkSZAAoJECiO+w6Set8uDWgP/2Lnx2j1foBu85sRtHwIqU72
<br>
AdQGPvCqbiXZ3Sn32ODJgCE6lGm38W075HqETN3CFfrawvLLpAjsnLs2mdA1GcZq
<br>
buoPVuFAHQQZ4FM7y+TGUt0NyMAsMDWfBR8t9JdyMZdP7fHYhGitkuGshItivWmQ
<br>
0j3KYzKFRe9qVGNvAc+f6eG7DnC+vUFNMZZ6APg62mYB7v//4NGhhrvHpYgD5jG2
<br>
S3kA1QfvM7xPy6rOL4gvyA6LRnFsNnQmKKLEJFXhPazwy5/5Aop8iwc2TxqVBsZE
<br>
Jw4B6ZrTKrQCzfuN4vN6jgeYHwhlZHKZqtVDMoIWHKwhJMvXlH8aTmeDqqj6sAfl
<br>
wknbew6BETuuIkszyRr0BjZrf4zjJ18vqDoRwFNa8p6Wc3cbhK96kl6fXquxTd4z
<br>
GIuRAIVqemEUGNKnGyuItYuVimkkvts5Ve5c/BxpMBT3oQX1LzOxb6+mcwzdR0dD
<br>
HK82VQlycFegLQ9+ERLgYEkcfmyZlvB+x/pwtx9RRMOd177w5fCo8hTTnkmWJNq2
<br>
jfq5cDiAW7knBJ1ZOGvMjp8RDpBMyMHjr6WCxQC3y+szR0TcMWrFUddcM2/2OBxF
<br>
YfFCP5jaeCQOOmDh1kcntcFoLw43io2xHFr/UwmfXeDhh/IFQrnEmshjvl/ZFF8n
<br>
RZogS6K9ty1C9x5GCBm4
<br>
=O0Fa
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14614.php">Adrian Reber: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14612.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>In reply to:</strong> <a href="14612.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14617.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Reply:</strong> <a href="14617.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
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
